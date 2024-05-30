<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;

Route::get('/login', function () {
    return view('layouts.login');
});

Route::get('/', function () {
    return view('layouts.main');
});

Route::prefix('assets')->name('assets.')->controller(AssetController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('{id}', 'show')->name('show');
    Route::put('{id}', 'update')->name('update');
});
