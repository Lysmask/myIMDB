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


Auth::routes();

//Home
Route::get('/', function () { return view('welcome'); });
Route::get('/home', 'HomeController@index')->name('home');

//Users
Route::get('/users', 'UserController@index');
Route::get('/users/create', 'UserController@create');
Route::get('/users/{user}', 'UserController@show');

//Movies
Route::get('/movies', 'MovieController@index')->name('movie.index');
Route::get('/movies/create', 'MovieController@create')->name('movie.create');
Route::post('/movies', 'MovieController@store')->name('movie.store');
Route::get('/movies/{movie}/edit', 'MovieController@edit')->name('movie.edit');
Route::get('/movies/{movie}', 'MovieController@show')->name('movies.show');
Route::post('/movies/{movie}', 'MovieController@update')->name('movie.update');

//Person
Route::get('/people', 'PersonController@index')->name('people.index');
Route::get('/people/create', 'PersonController@create')->name('people.create');
Route::post('/people', 'PersonController@store')->name('people.store');
Route::get('/people/{person}/edit', 'PersonController@edit')->name('person.edit');
Route::get('/people/{person}', 'PersonController@show')->name('person.show');
Route::post('/people/{person}', 'PersonController@update')->name('person.update');

//Genre
Route::get('/genres', 'GenreController@index')->name('genre.index');
Route::get('/genres/create', 'GenreController@create')->name('genre.create');
Route::post('/genres' , 'GenreController@store')->name('genre.store');
Route::get('/genres/{genre}', 'GenreController@show')->name('genre.show');

//Rating
// Route::get('/users/{user}/movies', 'RatingController@index')->name('rating.index');
// Route::Post('/movies/{movie}', 'RatingController@Store')->name('rating.store');
