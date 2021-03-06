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
    return view('home');
})->name('home');
/* Scorciatoia 7 rotte per operazioni CRUD */
//Route::resource('/games', 'GameController');

Route::get('/games','GameController@index')->name('games.index');

Route::get('/games/create','GameController@create')->name('games.create');

Route::post('/games','GameController@store')->name('games.store');

Route::get('/games/{game}','GameController@show')->name('games.show');

Route::get('/games/{game}/edit','GameController@edit')->name('games.edit');

Route::put('/games/{game}','GameController@update')->name('games.update');

Route::delete('/games/{game}','GameController@destroy')->name('games.destroy');


Route::get('/posts', 'PostController@index')->name('posts.index');

Route::get('/posts/create', 'PostController@create')->name('posts.create');

Route::post('/posts', 'PostController@store')->name('posts.store');

Route::get('/posts/{post}', 'PostController@show')->name('posts.show');

Route::get('/posts/{post}/edit','PostController@edit')->name('posts.edit');

Route::put('/posts/{post}','PostController@update')->name('posts.update');

Route::delete('/posts/{post}','PostController@destroy')->name('posts.destroy');




/*
model Game
migration games
controller resource GameController
seeder GameSeeder

- id
- title
- description
- thumb
- cover_image
- created_at
- update_at
*/
