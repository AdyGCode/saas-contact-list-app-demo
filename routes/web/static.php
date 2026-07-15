<?php
/**
 * Static page routes
 *
 * Provides single file for any pages that are considered "static".
 * This includes pages such as, but not limited to home, about, privacy, and contact-us pages
 *
 * Note we have a demo route that is used for demonstrating the UI Components
 */
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

//Route::get('/about',[StaticPageController::class,'about'])->name('about');
//Route::get('/privacy',[StaticPageController::class,'privacy'])->name('privacy');
//Route::get('/contact-us',[StaticPageController::class,'contactUs'])->name('contact-us');

//Route::get('/demo',[StaticPageController::class,'demo'])->name('demo');
//Route::post('/demo',[StaticPageController::class,'demoForm'])->name('demo-submit');
