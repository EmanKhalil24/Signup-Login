<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/show', function () {
    return view ('show');
});

// Route::get('/signup', function () {
//     return view ('signup');
// });

Route::resource('Regist', 'Regist');

Route::post('/login', 'Regist@login')->name('login');
Route::any('/signup', 'Regist@store')->name('signup');