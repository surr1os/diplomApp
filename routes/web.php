<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', \App\Http\Controllers\UserController::class)->name('user')->middleware(\App\Http\Middleware\Cors::class);
