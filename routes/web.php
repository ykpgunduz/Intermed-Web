<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');

// Dil değiştirme route'u
Route::get('language/{locale}', [LanguageController::class, 'switchLang'])->name('language.switch');
