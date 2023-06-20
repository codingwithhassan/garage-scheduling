<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

\Illuminate\Support\Facades\Auth::routes();

Route::middleware(['auth'])->group(function (){
    Route::resource('booking', \App\Http\Controllers\BookingController::class, [
        'only' => [
            'create',
            'store',
        ]
    ]);
    Route::prefix('admin')->middleware(['admin'])->group(function (){
        Route::get('/', [\App\Http\Controllers\AdminController::class, 'index']);
    });
});
