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

Route::group(['middleware' => ['web']], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
    Route::get('', 'SiteController@site');
    Route::get('site', 'SiteController@site');
    Route::get('notes', 'NotesController@index');
    Route::get('notes/{id}/destroy', 'NotesController@destroy')->name('notes.destroy');
});
