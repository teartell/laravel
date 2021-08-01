<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'MainController@home');

Route::get('/home', 'MainController@home');

Route::get('/about', 'MainController@about');

Route::get('/review', 'MainController@review')->name('review');
Route::post('/review/check', 'MainController@review_check');

Route::get('/post', 'MainController@post');

Route::get('/games', 'MainController@games');

Route::get('/movies', 'MainController@movies');

Route::get('/music', 'MainController@music');

//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return 'ID: '. $id.'. Name: '.$name;
//});
