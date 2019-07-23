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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'MainController@index');
Route::get('/login', array('as'=>'login', function(){
  return view('login');
}));

//Route::get('/dashboard/{alertType?}', 'HomeController@index')->name('dashboard');
Route::get('/dashboard/{alertType?}', ['as'=>'SweetAlert', 'uses'=>'HomeController@index'])->name('dashboard');

Route::get('/logout', 'MainController@logout');
Route::post('/logout', 'MainController@logout');

Route::post('/test', 'MainController@testTable');
/*
Route::get('*', 'MainController@missing');
Route::get('/', 'MainController@index');
Route::get('/login', 'MainController@index');
Route::get('/dashboard', 'MainController@dashboard');

Route::post('/login', 'MainController@validateLogin');

*/
