<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/languages', [LanguageController::class, 'index'])->name('languages.list');
Route::get('/languages/{lang}', [LanguageController::class, 'details'])->name('languages.details');
