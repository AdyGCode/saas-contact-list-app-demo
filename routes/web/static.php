<?php

/**
 * Static page routes
 *
 * Provides single file for any pages that are considered "static".
 * This includes pages such as, but not limited to home, about, privacy, and contact-us pages
 *
 * Note we have a demo route that is used for demonstrating the UI Components
 */

use App\Http\Controllers\DemoController;
use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'home')->name('home');

Route::get('/', [StaticPageController::class, 'home'])->name('home');

Route::get('/about', [StaticPageController::class, 'about'])->name('about');
Route::get('/privacy', [StaticPageController::class, 'privacy'])->name('privacy');
Route::get('/contact-us', [StaticPageController::class, 'contactUs'])->name('contact-us');

Route::get('/demo', [DemoController::class, 'index'])->name('demo');
Route::post('/demo', [DemoController::class, 'demoForm'])->name('demo-submit');

// Search is not posted, as search term added to query, as is page number for pagination
Route::get('/demo-icons', [DemoController::class, 'icons'])->name('demo-icons');
Route::post('/demo-icons', [DemoController::class, 'icons'])->name('demo-icons');
