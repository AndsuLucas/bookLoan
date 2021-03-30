<?php

use Illuminate\Http\Request;
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

Route::get('/books', '\App\Http\Controllers\BookController@getBooks')->name('bookList');
Route::match(
    ['get', 'post'],
    '/register',
    '\App\Http\Controllers\UserController@register'
)->name('userRegister');
Route::get(
    '/user/profile/{id}', 
    '\App\Http\Controllers\UserController@profile'
)->whereNumber('id')->name('viewProfile');

Route::view('/', 'principal');
Route::group(['prefix' => 'loan', 'middleware' => [/*'validateStock''auth'*/]], function() {
    Route::match(
        ['get', 'post'], 
        'book/{bookId}', 
        fn(Request $request) =>  dd('ok', $request) 
    )->name('loanBook')->whereNumber('bookId');
});
Route::middleware(['validateStock', 'auth'])->group(function() {
});