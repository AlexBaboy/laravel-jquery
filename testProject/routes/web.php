<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/data', function () {
    return view('data');
})->name('data');

Route::post('/register/submit', 'App\Http\Controllers\Auth\RegisterController@create')->name('user-form');
Route::get('/allusers', 'App\Http\Controllers\Auth\RegisterController@allusers')->name('users-data');

Route::get('/allusers/{id}/update', 'App\Http\Controllers\Auth\RegisterController@updateUser')->name('user-update');
Route::post('/makeupdate', 'App\Http\Controllers\Auth\RegisterController@updateUserMake')->name('user-update-make');

Route::post('/makedelete', 'App\Http\Controllers\Auth\RegisterController@makedelete')->name('user-delete');
