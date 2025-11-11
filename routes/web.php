<?php

use App\Http\Controllers\MainController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

Route::middleware([SetLocale::class])->group(function () {
    Route::get('/', [MainController::class, 'index']);
    Route::post('/', [MainController::class, 'store'])->name('sendMessage');
});
