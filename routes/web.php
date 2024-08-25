<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/registered', [App\Http\Controllers\HomeController::class, 'registered'])->name('registered');

// próba rejestracji użytkownika
// Route::post('/store_document', [App\Http\Controllers\DocumentController::class, 'store_as_admin']);
Route::post('/registerUser', [App\Http\Controllers\Auth\RegisterController::class, 'create']);

