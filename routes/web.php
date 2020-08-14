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

Route::get('/', function () {
    return view('welcome');
});

Route::get('books-info', 'BooksController@searchBooksInfo');
Route::get('books-info/create', 'BooksController@createBookInfo');
Route::post('books-info/store', 'BooksController@storeBookInfo');
Route::get('books-info/edit/{id}', 'BooksController@editBookInfo');
Route::post('books-info/update/{id}', 'BooksController@updateBookInfo');
Route::get('books-info/{id}', 'BooksController@showDetailBookInfo');
Route::post('books-info/delete/{id}', 'BooksController@deleteBookInfo');
