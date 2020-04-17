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

// ? Show all tha Books
Route::get('/books', 'BookController@showAll');

// ? Form to insert Books
Route::get('/book/create', 'BookController@create');
Route::post('/book/create', 'BookController@insert');

// ? Form for editing books
Route::get('/book/update/{id}', 'BookController@editPage');
Route::put('/book/update/{id}', 'BookController@update');
// ? Delete selected book
// Route::get('/book/delete/{id}', 'BookController@delete');
Route::delete('/book/delete/{id}', 'BookController@delete');
// Route::delete('/book/delete/{id}', 'BookController@delete');
