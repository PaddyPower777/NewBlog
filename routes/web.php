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

Route::view('/','pages.welcome');

Route::get('authors', 'AuthorController@getAllAuthors')->name('get-all-authors');
Route::get('authors/{author_name_slug}/{author_id}', 'PostController@getAuthorPosts')->name('get-author-posts');

Route::fallback(function() {
    echo 'Oops 404!';
});