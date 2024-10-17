<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/about-us', 'about')->name('about');
Route::get('/hello', [HelloController::class,'welcome'])->name('hello');