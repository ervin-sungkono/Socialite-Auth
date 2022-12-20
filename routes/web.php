<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProviderController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/login/{provider}', [ProviderController::class, 'redirectProvider']);
Route::get('/{provider}/callback', [ProviderController::class, 'providerCallback']);
