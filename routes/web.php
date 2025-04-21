<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('post-login', [LoginController::class, 'userLogin'])->name('login.post');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {

	// AdminHomeController
	Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard');

	// UserController
	Route::get('/users', [UserController::class, 'index'])->name('admin.users');
	Route::get('/users/create', [UserController::class, 'create'])->name('admin.user.create');
	Route::post('/users/store', [UserController::class, 'store'])->name('admin.user.store');
	Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
	Route::put('/users/{id}/update', [UserController::class, 'update'])->name('admin.user.update');

});
