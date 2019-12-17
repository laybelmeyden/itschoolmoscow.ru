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


Route::get('/', 'MainController@index');
Route::get('/uchastnikam', 'MainController@uchast');
Route::get('/allphotos', 'MainController@allphotos');
Route::get('/allnews', 'MainController@allnews');
Route::get('/newssolo{solo}', 'MainController@newssolo');
Route::get('/project', 'MainController@project');
// patch
Route::get('/district1', 'MainController@district1');
Route::get('/district2', 'MainController@district2');
Route::get('/district3', 'MainController@district3');
Route::get('/district4', 'MainController@district4');
Route::get('/district5', 'MainController@district5');
Route::get('/district6', 'MainController@district6');
Route::get('/district7', 'MainController@district7');
Route::get('/district8', 'MainController@district8');
Route::get('/district9', 'MainController@district9');
Route::get('/district10', 'MainController@district10');
Route::get('/district11', 'MainController@district11');
Route::get('/district12', 'MainController@district12');

Route::post('/contact_f', 'MainController@contact_f');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
