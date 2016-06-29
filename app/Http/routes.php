<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
// excel
Route::get('excel', 'MaatwebsiteDemoController@importExport');
Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');
Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');
// end excel


Route::get('/t1','HomeController@t');
Route::get('/home', 'HomeController@index');
Route::get('/cekresi', function () {
    return view('cekresi');
});
Route::get('/register2', 'HomeController@register');
Route::post('/register_store', 'HomeController@register_store');
Route::resource('remis', 'RemisController');
Route::resource('remisguest', 'RemisguestController');
Route::resource('posts', 'PostsController');
Route::resource('selisih_remis', 'Selisih_remisController');
Route::resource('selisih_remisguest', 'Selisih_remisguestController');


Route::resource('coupure3', 'coupure3Controller');

Route::resource('coupure3guest', 'coupure3guestController');
Route::resource('coupure6', 'coupure6Controller');
Route::resource('coupure6guest', 'coupure6guestController');