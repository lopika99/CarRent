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

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/all_cars', 'HomeController@cars')->name('all_ars');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/contact', 'HomeController@contact')->name('contact');


Route::get('/admin/users', 'UserController@index')->middleware('admin')->name('indexusers');
Route::get('/admin/createuser','UserController@create')->middleware('admin')->name('createuser');
Route::post('/admin/storeuser', 'UserController@store')->middleware('admin')->name('storeuser');
Route::get('/admin/deleteuser/{id}','UserController@destroy')->middleware('admin')->name('deleteuser');
Route::get('/admin/edituser/{id}','UserController@edit')->middleware('admin')->name('edituser');
Route::put('/admin/updateuser/{id}','UserController@update')->middleware('admin')->name('updateuser');
Route::put('/admin/authority/{id}','UserController@authority')->middleware('admin')->name('changeauth');


Route::get('/admin/cars', 'CarController@index')->middleware('admin')->name('indexcars');
Route::get('/admin/createcar','CarController@create')->middleware('admin')->name('createcar');
Route::post('/admin/storecar','CarController@store')->middleware('admin')->name('storecar');
Route::delete('/admin/deletecar/{id}','CarController@destroy')->middleware('admin')->name('deletecar');
Route::get('/admin/editcar/{id}','CarController@edit')->middleware('admin')->name('editcar');
Route::put('/admin/updatecar/{id}','CarController@update')->middleware('admin')->name('updatecar');


Route::get('/admin/pictures/{car_id}','PictureController@index')->middleware('admin')->name('indexpictures');
Route::post('/admin/storepic/{car_id}', 'PictureController@store')->middleware('admin')->name('storepic');
Route::get('/admin/deletepic/{id}','PictureController@destroy')->middleware('admin')->name('deletepic');

Route::get('/admin/reserves', 'ReserveController@index')->middleware('admin')->name('indexreserves');
Route::post('/storereserve','ReserveController@store')->name('storereserve');
Route::delete('/admin/deletereserve/{id}','ReserveController@destroy')->middleware('admin')->name('deletereserve');
Route::get('/searched','ReserveController@search')->name('searched');

Route::get('/cars','CarController@showcars')->middleware('admin')->name('showcars');
Route::get('/reserve','ReserveController@reserve')->name('reserve');