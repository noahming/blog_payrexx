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

Route::get('login', function () {
    return view('login');
})->name('login');
Route::post('login', 'UserController@login');
Route::post('logout', 'UserController@logout');

Route::get('signup', function () {
    return view('signup');
})->name('signup');
Route::post('signup', 'UserController@create');

Route::get('new', function () {
    return view('new');
})->name('new');
Route::post('new', 'BlogController@create');

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('home', function(){
    return view('home');
})->name('home');

Route::get('/post/{ID}', 'BlogController@show');
