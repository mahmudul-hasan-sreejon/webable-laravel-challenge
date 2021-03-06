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

Route::get('/', function () {
    return redirect("/films");
});

Auth::routes();

Route::get('/home', function () {
    return redirect("/films");
})->name('home');

Route::get('/films', 'FilmsController@index');

Route::get('/films/create', 'FilmsController@create')->middleware('auth');

Route::post('/films/add', 'FilmsController@add');

Route::get('/films/{slug}', 'FilmsController@show');

Route::post('/films/add/comment', 'FilmsController@addComment')->middleware('auth');
