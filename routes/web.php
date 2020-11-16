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

Route::get('/', 'PostController@getLatestPost')->name('get-latest-post');

Route::get('authors', 'AuthorController@getAllAuthors')->name('get-all-authors');
Route::get('authors/{author_name_slug}/{author_id}', 'PostController@getAuthorPosts')->name('get-author-posts');
Route::get('post/{post_slug}/{post_id}', 'PostController@getPost')->name('get-post');

Route::fallback(function() {
    echo 'Oops 404!';
});