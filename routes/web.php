<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\PurchaseController;

Route::get('/', function () {
    return view('layouts.login');
});

Route::prefix('assets')->name('assets.')->controller(AssetController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::put('{id}', 'update')->name('update');
});

Route::prefix('purchase')->name('purchase.')->controller(PurchaseController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::post('/add-items', 'store')->name('store');
    Route::put('{id}', 'update')->name('update');
    Route::get('{id}', 'destroy')->name('destroy');
});
