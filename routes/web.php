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
        'delivery_status' => 'pending'
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