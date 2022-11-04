<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Frontend
Route::get('/', 'WebController@index')->name('home');

Route::group(['middleware' => ['guest']], function(){
    Route::get('admin/login', 'Admin\AdminController@login')->name('admin.login');
    Route::post('admin/login', 'Admin\AdminController@authenticate')->name('admin.login');
});

Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function() {
    Route::get('/dashboard', 'Admin\AdminController@dashboard')->name('admin.dashboard');
    Route::get('/profile/edit', 'Admin\AdminController@editProfile')->name('admin.profile.edit');
    Route::post('/profile/update', 'Admin\AdminController@updateProfile')->name('admin.profile.update');
    Route::post('/logout', 'Admin\AdminController@logout')->name('admin.logout');

    //admin reset password
    Route::get('forgot_password', 'Admin\AdminController@forgotPassword')->name('admin.forgot_password');
    Route::get('send-password-reset-link', 'Admin\AdminController@passwordResetLink')->name('admin.send-password-reset-link');
    Route::get('reset-password/{token}', 'Admin\AdminController@resetPassword')->name('admin.reset-password');
    Route::post('change_password', 'Admin\AdminController@changePassword')->name('admin.change_password');

    //pages settings
    Route::resource('page', 'Admin\PageController');
    Route::resource('page_setting', 'Admin\PageSettingController');

    //permissions
    Route::resource('permission', 'Admin\PermissionController');

    //Roles
    Route::resource('role', 'Admin\RoleController');

    Route::resource('menu', 'Admin\MenuController');

    Route::resource('user', 'Admin\UserController');
});

require __DIR__.'/auth.php';

Route::resource('admin/category', 'CategoryController');
