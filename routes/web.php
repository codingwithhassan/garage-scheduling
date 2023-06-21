<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

\Illuminate\Support\Facades\Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function (){
    Route::resource('booking', \App\Http\Controllers\BookingController::class, [
        'only' => [
            'create',
            'store',
        ]
    ]);
    Route::prefix('admin')->middleware(['admin'])->group(function (){
        Route::get('/', [\App\Http\Controllers\AdminController::class, 'index']);
        Route::fallback([\App\Http\Controllers\AdminController::class, 'index']);
    });
});
