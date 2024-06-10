<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;

Route::get('/', [LinkController::class, 'index'])->name('home');
Route::post('/shorten', [LinkController::class, 'store'])->name('shorten');
Route::get('/{shortCode}', [LinkController::class, 'show'])->name('redirect');
