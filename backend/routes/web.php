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

Route::get('/', 'GuestController@index')->name('home');

Route::get('/login', 'GuestLoginController@showLoginForm')->name('guest.login');
Route::post('login', 'GuestLoginController@login')->name('guest.login');
Route::get('/playlist', 'SongController@index')->name('guest.playlist');
Route::post('/playlist', 'SongController@store')->name('guest.song.add');
Route::post('/playlist/message', 'MessageController@store')->name('guest.message.add');
Route::get('/playlist/{id}', 'SongController@edit')->name('guest.song.edit');
Route::put('/playlist/{id}', 'SongController@update')->name('guest.song.update');
Route::delete('/playlist/{id}', 'SongController@destroy')->name('guest.song.destroy');

Route::get('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

Route::get('/done', 'GuestController@finished')->name('guest.done');

Route::get('/admin/export/messages', 'ExportController@exportMessages')->name('export.messages');
Route::get('/admin/export/songs', 'ExportController@exportSongs')->name('export.songs');

// Login System: /admin and /admin/login
Route::group(['prefix' => 'admin'], function() {

    // Admin Routes...
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/export', 'AdminController@export')->name('admin.export');

    // Authentication Routes...
    Route::get('/login', [
        'as' => 'login',
        'uses' => 'Auth\LoginController@showLoginForm'
    ]);

    Route::post('login', [
        'as' => '',
        'uses' => 'Auth\LoginController@login'
    ]);

    // Registration Routes...
    Route::get('register', [
        'as' => 'register',
        'uses' => 'Auth\RegisterController@showRegistrationForm'
    ]);

    Route::post('register', [
        'as' => '',
        'uses' => 'Auth\RegisterController@register'
    ]);

});
