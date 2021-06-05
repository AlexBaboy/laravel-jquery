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
Route::get('/register/allusers', 'App\Http\Controllers\Auth\RegisterController@allusers')->name('users-data');


