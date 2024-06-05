<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('login', function () {
    return view('layouts.login');
});

Route::post('login', LoginController::class)->name('login');

Route::post('logout', LogoutController::class)->name('logout');

Route::middleware('auth')->group(function() {
    Route::prefix('assets')->name('assets.')->controller(AssetController::class)->group(function() {
        Route::get('/', 'index')->name('index');
        Route::put('{id}', 'update')->name('update');
        Route::get('downloadCsv', 'downloadCsv')->name('csv');
    });

    Route::prefix('purchase')->name('purchase.')->controller(PurchaseController::class)->group(function() {
        Route::get('/', 'index')->name('index');
        Route::post('/add-items', 'store')->name('store');
        Route::put('{id}', 'update')->name('update');
        Route::get('{id}', 'destroy')->name('destroy');
    });

});
