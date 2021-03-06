<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\lot;
use App\App_items;
use App\invitation;
use App\bidder;
use App\bidder_lot;
use App\actual_bidding;
use App\invitation_lot;

use Illuminate\Http\Request;
Auth::routes();

Route::get('app-items', 'app_itemsController@index');
Route::get('app-data', 'app_itemsController@getData');
Route::get('invitations-data', 'invitationsController@getData');
Route::get('/create', 'app_itemsController@create');
Route::get('/api/print/invitation/{invitation}', function(invitation $invitation){
    return view('pages.printinvitation',[
        'invitation'=>$invitation
    
    ]);
});

// Route::get('/', 'PagesController@index');
Route::get('/createinvitation', 'PagesController@createinvitation');
Route::get('/invitations/{invitation}/assign/lots','PagesController@assignlots' );

Route::get('/invitation', 'PagesController@invitation');
Route::get('/bidding', 'PagesController@bidding');
Route::get('/bidderlist', 'PagesController@bidderlist');
Route::get('/summary', 'PagesController@summary');
Route::get('/postqual', 'PagesController@postqual');
Route::get('logout', function(Request $request){
    Auth::logout();
    return redirect('/login');
});
// Route::get('/', 'lotsController@index');

// Route::resource('lots','lotsController');
// Route::resource('app_items','app_itemsController');
// Route::resource('suppliers','suppliersController');
// Route::resource('invitations','invitationsController');
// Route::resource('invitation_lots','invitation_lotsController');

Route::get('/', 'HomeController@index')->name('home');

Route::post('/api/item/{item}/assign/lot/submit', function (Request $request,$itemID) {
	$lotID = null;
	if($request->lot){
		$lotID = lot::firstOrCreate(['lot_no' => $request->lot])->id;
	}
    
    $item = App_items::find($itemID);

    $item->update(
        array('lot_id'=>$lotID)
    );
    return response()->json($item);
});

Route::post('/api/acutal-bidding/update', function (Request $request) {
   
    $item = actual_bidding::find($request->id);

    if($request->amount)
        $item->update(
            array('amount'=>$request->amount)
        );
    if($request->receiver)
        $item->update(
            array('receiver'=>$request->receiver)
        );
    if($request->status){
        $item->update(
            array('status'=>$request->status,'submitted'=>true)
        );
        $item = actual_bidding::find($request->id);

    }
    if($request->notice)
        $item->update(
            array('notice'=>$request->notice,'submitted'=>true)
        );
    return $item;
});

Route::get('/api/lots/{lot}', function (lot $lot) {
    
    $lot->items = $lot->items();
    return response()->json($lot);
});

Route::post('/createinvitation',  function (Request $request) {

    $invitation = invitation::create(array(
        'project_name' => $request->input('project_name'),
        'procurement_type' => $request->input('procurement_type'),
        'reference_no' => $request->input('reference_no'),
        'location' => $request->input('location'),
        'approved_budget' => $request->input('approved_budget'),
        'fund_source' => $request->input('fund_source'),
        'bidder_fee' => $request->input('bidder_fee'),
        'delivery_period' => $request->input('delivery_period'),
        'delivery_status' => 'pre-bidding'
    ));
    return redirect('invitations/'.$invitation->id.'/assign/lots');;
});

Route::post('/invitations/{invitation}/assign/lots/submit',  function (Request $request, invitation $invitation) {

    foreach ($request->input('lots') as $index => $lot) {
       invitation_lot::create(array(
            'invitation_id' => $invitation->id,
            'lot_id' => $lot
        ));
        $cur_lot = lot::find($lot);
        $items =  $cur_lot->items();
        foreach ($items as $key => $item) {
            $item->update(array(
                'disabled' => true
            ));
        }
    }
    return redirect('invitation/');
});

Route::get('/invitations/{invitation}/pre-bidding',  function (Request $request, invitation $invitation) {

    $title= "List of Bidders";
    $bidders = $invitation->bidders()->get();

    return view('pages.addbidders',[
        'invitation' => $invitation,
        'title' => $title,
        'bidders' =>$bidders

    ]);
});

Route::get('/invitations/{invitation}/actual-bidding',  function (Request $request, invitation $invitation) {

    $title= "List of Actual Bidders";
    $actual_biddings = $invitation->actual_biddings()->get();

    return view('pages.actual-bidding',[
        'invitation' => $invitation,
        'title' => $title,
        'actual_biddings' =>$actual_biddings

    ]);
});

Route::get('/invitations/{invitation}/post-qualification',  function (Request $request, invitation $invitation) {

    $title= "List of Actual Bidders";
    $actual_biddings = $invitation->actual_biddings()->get();

    return view('pages.post-qualification',[
        'invitation' => $invitation,
        'title' => $title,
        'actual_biddings' =>$actual_biddings

    ]);
});


Route::post('/invitations/{invitation}/pre-bidding',  function (Request $request, invitation $invitation) {

    $title= "List of Bidders";
    $bidder = bidder::create(array(
        'csi_no' => $request->input('csi_no'),
        'company_name' => $request->input('company_name'),
        'address' => $request->input('address'),
        'contact_person' => $request->input('contact_person'),
        'contact_no' => $request->input('contact_no'),
        'email' => $request->input('email'),
        'invitation_id' => $invitation->id,
    ));
    $bidders = $invitation->bidders()->get();
    return view('pages.addbidders',[
        'invitation' => $invitation,
        'title' => $title,
        'bidders' =>$bidders

    ]);
});

Route::post('/invitations/{invitation}/attendance',  function (Request $request, invitation $invitation) {

    $bidders = $request->input('bidders');
    $dates = $request->input('dates');
    $lots = str_replace(' ','',$request->input('lots')); 
    $actual_biddings =actual_bidding::where(array(
        'invitation_id' => $invitation->id,
    ))->get();

    foreach ($bidders as $index => $bidder) {
        actual_bidding::firstOrCreate(array(
            'bidder_id' => $bidder,
            'invitation_id' => $invitation->id,
        ));
        $cur_bidder = bidder::find($bidder);
        
        $cur_bidder->update(array(
            'date' => $dates[$index]
        ));

        $bidder_lots =bidder_lot::where('bidder_id', '=', $cur_bidder->id)->get();

        foreach ($bidder_lots as $key => $bidder_lot) {
            $bidder_lot->delete();
        }

        $cur_lots = explode(',',$lots[$index]);
        foreach ($cur_lots as $key => $cur_lot) {
            $lot = lot::where('lot_no','=',$cur_lot)->first();
            bidder_lot::create(array(
                'invitation_id' => $invitation->id,
                'lot_id' => $lot->id,
                'bidder_id' => $cur_bidder->id,
            ));
        }
        

        
        
    }
    
    // if($attendance){
    //     foreach ($actual_biddings as $key => $actual_bidding) {
    //         $found = false;
    //         foreach ($attendance as $key => $bidder) {
    //             if($actual_bidding->bidder_id == $bidder)
    //                 $found = true;
                
    //         }

    //         if($found == false){
    //             $actual_bidding->delete();
    //         }
    //     }
        
    //     foreach ($attendance as $key => $bidder) {
    //         actual_bidding::firstOrCreate(array(
    //             'bidder_id' => $bidder,
    //             'invitation_id' => $invitation->id,
    //         ));
    //     }
    // }else{
    //     foreach ($actual_biddings as $key => $actual_bidding) {
    //         $actual_bidding->delete();
    //     }
    // }
    return redirect('/invitations/'.$invitation->id.'/actual-bidding');
});