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

// * No controllers

Route::get('/', function () {
    return view('welcome');
});

// * Using controllers 
// * not using resource because its becoming a mess, editing something 
// * that was built with something else in mind
// ? Show all tha Books
Route::get('/books', 'BookController@index');

// ? Form to insert Books
Route::get('/book/create', 'BookController@create');
Route::post('/book/create', 'BookController@store');

// ? Form for editing books
Route::get('/book/update/{id}', 'BookController@show');
Route::put('/book/update/{id}', 'BookController@edit');
// ? Delete selected book
// Route::get('/book/delete/{id}', 'BookController@delete');
Route::delete('/book/delete/{id}', 'BookController@destroy');
// Route::delete('/book/delete/{id}', 'BookController@delete');
