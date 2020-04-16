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

// * Without using controllers

Route::get('/movie', function () {
    return view('movie');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foo', function () {
    return 'HELLO, SHERLOCK!';
})->name('fooZZZ');
 
// ? Only the dynamic part, it will take a string as an arg
Route::get('/movie/{id}', function ($id) {
    return 'Movie, with id: ' . $id;
});

Route::get('/movie/{id}/{order}', function ($id, $order) {
    return 'Movie, with id: ' . $id . ' Order by: ' . $order;
});

// * Using controllers

Route::get('/index', 'TestController@index');
// ? Takes the dynamic bit and sends it to the specified method (@show)
Route::get('/product/{id}/{order}', 'TestController@show');
Route::get('/insert', 'TestController@insert');
Route::post('/insert', 'TestController@store');

// * Movies

Route::get('/edit/{id}', 'MovieController@edit');
Route::get('/movies', 'MovieController@show');
Route::put('/edit/{id}', 'MovieController@update');