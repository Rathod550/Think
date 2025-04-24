<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\EditPermissionController;
use App\Http\Controllers\Admin\NoteController;
use App\Http\Controllers\Admin\NotificationController;

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
	Route::get('/users', [UserController::class, 'index'])->name('admin.users')->middleware('permission:User List');
	Route::get('/users/create', [UserController::class, 'create'])->name('admin.user.create')->middleware('permission:User Create');
	Route::post('/users/store', [UserController::class, 'store'])->name('admin.user.store');
	Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('admin.user.edit')->middleware('permission:User Edit');
	Route::put('/users/{id}/update', [UserController::class, 'update'])->name('admin.user.update');
	Route::delete('/users/{id}/delete', [UserController::class, 'delete'])->name('admin.user.delete')->middleware('permission:User Delete');
	Route::get('/profile/users/{id}', [UserController::class, 'profile'])->name('admin.profile');
	Route::put('/users/{id}/profile/update', [UserController::class, 'profileUpdate'])->name('admin.profile.update');

	// RoleController
	Route::get('/roles', [RoleController::class, 'index'])->name('admin.roles')->middleware('permission:User Role List');
	Route::get('/roles/create', [RoleController::class, 'create'])->name('admin.roles.create')->middleware('permission:User Role Create');
	Route::post('/roles/store', [RoleController::class, 'store'])->name('admin.roles.store');
	Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('admin.roles.edit')->middleware('permission:Role Edit');
	Route::put('/roles/{id}/update', [RoleController::class, 'update'])->name('admin.roles.update');
	Route::delete('/roles/{id}/delete', [RoleController::class, 'delete'])->name('admin.roles.delete')->middleware('permission:User Role Delete');

	// EditPermissionController
	Route::get('roles-permission/{id}/edit', [EditPermissionController::class, 'edit'])->name('admin.roles.permission.edit')->middleware('permission:User Role Manage Permission');
	Route::put('roles-permission/{id}/update', [EditPermissionController::class, 'permissionSet'])->name('admin.roles.permission.update');

	// NoteController
	Route::get('/notes', [NoteController::class, 'index'])->name('admin.notes')->middleware('permission:User Note List');
	Route::get('/notes/create', [NoteController::class, 'create'])->name('admin.notes.create')->middleware('permission:User Note Create');
	Route::post('/notes/store', [NoteController::class, 'store'])->name('admin.notes.store');
	Route::get('/notes/{id}/edit', [NoteController::class, 'edit'])->name('admin.notes.edit')->middleware('permission:User Note Edit');
	Route::put('/notes/{id}/update', [NoteController::class, 'update'])->name('admin.notes.update');
	Route::delete('/notes/{id}/delete', [NoteController::class, 'delete'])->name('admin.notes.delete')->middleware('permission:User Note Delete');

	// NotificationController
	Route::get('/remove-bell-number', [NotificationController::class, 'removeBellNumber'])->name('admin.remove.bell.number');
});
