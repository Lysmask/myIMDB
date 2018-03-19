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
Route::get('/movies', 'MovieController@index');
Route::get('/movies/create', 'MovieController@create');
Route::post('/movies', 'MovieController@store')->name('movie.store');
Route::get('/movies/{movie}', 'MovieController@show');


//Person
Route::get('/people', 'PersonController@index')->name('people.index');
Route::get('/people/create', 'PersonController@create');
Route::post('/people', 'PersonController@store')->name('people.store');
Route::get('/people/{person}', 'PersonController@show');
