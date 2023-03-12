<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Frontend\ContactController;

//ADMIN ROUTE
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::get('/get-session-data', [AdminAuthController::class, 'get_session_data'])->name('get_session_data');

    //PROFILE ROUTE
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('/update-profile', [ProfileController::class, 'update_profile'])->name('update_profile');
    Route::post('/update-password', [ProfileController::class, 'update_password'])->name('update_password');

});

//FRONTEND ROUTE
Route::group(['middleware' => 'guest'], function () {
    Route::get('/admin/login', [AdminAuthController::class, 'admin_login'])->name('login');
    Route::post('/admin-login-action', [AdminAuthController::class, 'admin_login_action'])->name('admin.login.action');

});
