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
Auth::routes();

Route::get('app-items', 'app_itemsController@index');
Route::get('app-data', 'app_itemsController@getData');
Route::get('/create', 'app_itemsController@create');

// Route::get('/', 'PagesController@index');
Route::get('/createinvitation', 'PagesController@createinvitation');
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