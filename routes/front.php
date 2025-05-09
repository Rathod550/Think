<?php

use App\Http\Controllers\Front\FrontHomeController;

Route::get('/', [FrontHomeController::class, 'index'])->name('home');
Route::get('/about-us', [FrontHomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact-us', [FrontHomeController::class, 'contactUs'])->name('contactUs');
