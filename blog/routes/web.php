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

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', 'UserController@login');

Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup', 'UserController@create');

Route::get('/new', function () {
    return view('new');
});
Route::post('/new', 'BlogController@create');

Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});
