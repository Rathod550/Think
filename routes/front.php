<?php

use App\Http\Controllers\Front\FrontHomeController;
use App\Http\Controllers\Front\LanguageController;

Route::post('/setLanguage', [LanguageController::class, 'setLanguage'])->name('setLanguage');

Route::get('/', [FrontHomeController::class, 'index'])->name('home');
Route::get('/about-us', [FrontHomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact-us', [FrontHomeController::class, 'contactUs'])->name('contactUs');
Route::post('/contact-us/store', [FrontHomeController::class, 'contactUsStore'])->name('contactUsStore');
Route::get('/terms-and-conditions', [FrontHomeController::class, 'termsAndConditions'])->name('terms.and.conditions');
Route::get('/categories/{slug}', [FrontHomeController::class, 'categories'])->name('categories');
Route::get('/blogs/{type?}/{slug?}', [FrontHomeController::class, 'blogs'])->name('blogs');
