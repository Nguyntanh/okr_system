<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::group(['middleware' => ['web']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});