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
use App\actual_bidding;
use App\invitation_lot;
use Auth;
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

Route::post('/api/item/{item}/assign/lot/{lot}', function ($itemID,$lotNumber) {
    $lot = lot::firstOrCreate(['lot_no' => $lotNumber]);
    $item = App_items::find($itemID);

    $item->update(
        array('lot_id'=>$lot->id)
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

    foreach ($request->input('attendance') as $key => $bidder) {
        actual_bidding::firstOrCreate(array(
            'bidder_id' => $bidder,
            'invitation_id' => $invitation->id,
        ));
    }
    return redirect('/invitations/'.$invitation->id.'/actual-bidding');
});