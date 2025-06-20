<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\EditPermissionController;
use App\Http\Controllers\Admin\NoteController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\TraficEmailController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\OurTeamController;
use App\Http\Controllers\Admin\ClientSaysController;
use App\Http\Controllers\Admin\AboutUsSliderController;
use App\Http\Controllers\Admin\FrontSettingController;
use App\Http\Controllers\Admin\BlogController;

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

Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('login');
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
	Route::post('/users/set/notification/status', [UserController::class, 'setNotificationStatus'])->name('admin.users.set.notification.status');
	Route::get('/notifications', [UserController::class, 'notifications'])->name('admin.users.notifications');
	Route::get('/users/{id}/login/as', [UserController::class, 'loginAs'])->name('admin.user.login.as')->middleware('permission:User Login As');

	// RoleController
	Route::get('/roles', [RoleController::class, 'index'])->name('admin.roles')->middleware('permission:User Role List');
	Route::get('/roles/create', [RoleController::class, 'create'])->name('admin.roles.create')->middleware('permission:User Role Create');
	Route::post('/roles/store', [RoleController::class, 'store'])->name('admin.roles.store');
	Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('admin.roles.edit')->middleware('permission:User Role Edit');
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

	// BlogCategoryController
	Route::get('/blog-category', [BlogCategoryController::class, 'index'])->name('admin.blog.category')->middleware('permission:User Blog Category List');
	Route::get('/blog-category/create', [BlogCategoryController::class, 'create'])->name('admin.blog.category.create')->middleware('permission:User Blog Category Create');
	Route::post('/blog-category/store', [BlogCategoryController::class, 'store'])->name('admin.blog.category.store');
	Route::get('/blog-category/{id}/edit', [BlogCategoryController::class, 'edit'])->name('admin.blog.category.edit')->middleware('permission:User Blog Category Edit');
	Route::put('/blog-category/{id}/update', [BlogCategoryController::class, 'update'])->name('admin.blog.category.update');
	Route::delete('/blog-category/{id}/delete', [BlogCategoryController::class, 'delete'])->name('admin.blog.category.delete')->middleware('permission:User Blog Category Delete');
	Route::post('/blog-category/status', [BlogCategoryController::class, 'setBlogCategoryStatus'])->name('admin.set.blog.category.status')->middleware('permission:User Blog Category Status');

	// Sub category
	Route::get('/blog-category/sub/{id}', [BlogCategoryController::class, 'blogCategorySubIndex'])->name('admin.blog.category.sub')->middleware('permission:User Blog Category Sub List');
	Route::get('/blog-category/sub/create/{id}', [BlogCategoryController::class, 'blogCategorySubCreate'])->name('admin.blog.category.sub.create')->middleware('permission:User Blog Category Sub Create');
	Route::post('/blog-category/sub/store', [BlogCategoryController::class, 'blogCategorySubStore'])->name('admin.blog.category.sub.store');
	Route::get('/blog-category/sub/{parentId}/{id}/edit', [BlogCategoryController::class, 'blogCategorySubEdit'])->name('admin.blog.category.sub.edit')->middleware('permission:User Blog Category Sub Edit');
	Route::put('/blog-category/sub/{id}/update', [BlogCategoryController::class, 'blogCategorySubUpdate'])->name('admin.blog.category.sub.update');
	Route::post('/blog-category/sub/status', [BlogCategoryController::class, 'setBlogCategorySubStatus'])->name('admin.set.blog.category.sub.status')->middleware('permission:User Blog Category Sub Status');

	// TraficEmailController
	Route::get('/trafic-email', [TraficEmailController::class, 'index'])->name('admin.trafic.email')->middleware('permission:User Trafic Email List');
	Route::get('/trafic-email/create', [TraficEmailController::class, 'create'])->name('admin.trafic.email.create')->middleware('permission:User Trafic Email Create');
	Route::post('/trafic-email/store', [TraficEmailController::class, 'store'])->name('admin.trafic.email.store');
	Route::get('/trafic-email/{id}/edit', [TraficEmailController::class, 'edit'])->name('admin.trafic.email.edit')->middleware('permission:User Trafic Email Edit');
	Route::put('/trafic-email/{id}/update', [TraficEmailController::class, 'update'])->name('admin.trafic.email.update');
	Route::delete('/trafic-email/{id}/delete', [TraficEmailController::class, 'delete'])->name('admin.trafic.email.delete')->middleware('permission:User Trafic Email Delete');
	Route::get('/trafic-email/import/create', [TraficEmailController::class, 'importCreate'])->name('admin.trafic.email.import.create')->middleware('permission:User Trafic Email Import');
	Route::post('/trafic-email/import/store', [TraficEmailController::class, 'importStore'])->name('admin.trafic.email.excel.store');

	// SliderController
	Route::get('/slider', [SliderController::class, 'index'])->name('admin.slider')->middleware('permission:Slider List');
	Route::get('/slider/create', [SliderController::class, 'create'])->name('admin.slider.create')->middleware('permission:Slider Create');
	Route::post('/slider/store', [SliderController::class, 'store'])->name('admin.slider.store');
	Route::get('/slider/{id}/edit', [SliderController::class, 'edit'])->name('admin.slider.edit')->middleware('permission:Slider Edit');
	Route::put('/slider/{id}/update', [SliderController::class, 'update'])->name('admin.slider.update');
	Route::delete('/slider/{id}/delete', [SliderController::class, 'delete'])->name('admin.slider.delete')->middleware('permission:Slider Delete');

	// OurTeamController
	Route::get('/our-team', [OurTeamController::class, 'index'])->name('admin.our.team')->middleware('permission:Our Team List');
	Route::get('/our-team/create', [OurTeamController::class, 'create'])->name('admin.our.team.create')->middleware('permission:Our Team Create');
	Route::post('/our-team/store', [OurTeamController::class, 'store'])->name('admin.our.team.store');
	Route::get('/our-team/{id}/edit', [OurTeamController::class, 'edit'])->name('admin.our.team.edit')->middleware('permission:Our Team Edit');
	Route::put('/our-team/{id}/update', [OurTeamController::class, 'update'])->name('admin.our.team.update');
	Route::delete('/our-team/{id}/delete', [OurTeamController::class, 'delete'])->name('admin.our.team.delete')->middleware('permission:Our Team Delete');

	// ClientSaysController
	Route::get('/client-says', [ClientSaysController::class, 'index'])->name('admin.client.says')->middleware('permission:Client Says List');
	Route::get('/client-says/create', [ClientSaysController::class, 'create'])->name('admin.client.says.create')->middleware('permission:Client Says Create');
	Route::post('/client-says/store', [ClientSaysController::class, 'store'])->name('admin.client.says.store');
	Route::get('/client-says/{id}/edit', [ClientSaysController::class, 'edit'])->name('admin.client.says.edit')->middleware('permission:Client Says Edit');
	Route::put('/client-says/{id}/update', [ClientSaysController::class, 'update'])->name('admin.client.says.update');
	Route::delete('/client-says/{id}/delete', [ClientSaysController::class, 'delete'])->name('admin.client.says.delete')->middleware('permission:Client Says Delete');

	// AboutUsSliderController
	Route::get('aboutUs/slider', [AboutUsSliderController::class, 'index'])->name('admin.aboutUs.slider')->middleware('permission:About Us Slider List');
	Route::get('aboutUs/slider/create', [AboutUsSliderController::class, 'create'])->name('admin.aboutUs.slider.create')->middleware('permission:About Us Slider Create');
	Route::post('aboutUs/slider/store', [AboutUsSliderController::class, 'store'])->name('admin.aboutUs.slider.store');
	Route::get('aboutUs/slider/{id}/edit', [AboutUsSliderController::class, 'edit'])->name('admin.aboutUs.slider.edit')->middleware('permission:About Us Slider Edit');
	Route::put('aboutUs/slider/{id}/update', [AboutUsSliderController::class, 'update'])->name('admin.aboutUs.slider.update');
	Route::delete('aboutUs/slider/{id}/delete', [AboutUsSliderController::class, 'delete'])->name('admin.aboutUs.slider.delete')->middleware('permission:About Us Slider Delete');

	// FrontSettingController
	Route::get('front-setting', [FrontSettingController::class, 'index'])->name('admin.front.setting');
	Route::post('front-setting/update', [FrontSettingController::class, 'update'])->name('admin.front.setting.update');

	// BlogController
	Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blog')->middleware('permission:User Blog List');
	Route::get('/blogs/create', [BlogController::class, 'create'])->name('admin.blog.create')->middleware('permission:User Blog Create');
	Route::post('/blogs/store', [BlogController::class, 'store'])->name('admin.blog.store');
	Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit')->middleware('permission:User Blog Edit');
	Route::put('/blogs/{id}/update', [BlogController::class, 'update'])->name('admin.blog.update');
	Route::delete('/blogs/{id}/delete', [BlogController::class, 'delete'])->name('admin.blog.delete')->middleware('permission:User Blog Delete');
	Route::get('/blogs/{id}/show', [BlogController::class, 'show'])->name('admin.blog.show')->middleware('permission:User Blog View');
	Route::post('/blogs/sub-category/get', [BlogController::class, 'blogSubCategory'])->name('admin.blog.sub-category.get');
});
