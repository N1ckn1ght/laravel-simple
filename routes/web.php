<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WallController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/wall', [WallController::class, 'data'])->name('wall');
Route::post('/wall/submit', [WallController::class, 'submit'])->name('wall-form');
