<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\SliderController;

use App\Http\Controllers\Front\FrontHomeController;
use App\Http\Controllers\Front\ContectController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [FrontHomeController::class, 'index'])->name('home');
Route::get('/contect', [ContectController::class, 'contect'])->name('contect');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/service', [ServiceController::class, 'service'])->name('service');
Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
Route::get('/blogs/preview', [BlogController::class, 'blogPreview'])->name('blogs.preview');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');

Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('post-login', [LoginController::class, 'userLogin'])->name('login.post');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {

	// AdminHomeController
	Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard');

	// SliderController
	Route::get('/slider', [SliderController::class, 'index'])->name('admin.slider');
	Route::get('/slider/create', [SliderController::class, 'create'])->name('admin.slider.create');
	Route::post('/slider/store', [SliderController::class, 'store'])->name('admin.slider.store');

});
