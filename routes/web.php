<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Frontend\FrontendController;

//ADMIN ROUTE
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::get('/get-session-data', [AdminAuthController::class, 'get_session_data'])->name('get_session_data');

    //PROFILE ROUTE
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('/update-profile', [ProfileController::class, 'update_profile'])->name('update_profile');
    Route::post('/update-password', [ProfileController::class, 'update_password'])->name('update_password');

    //PRODUCT ROUTE
    Route::get('/category-list', [ProductController::class, 'category_list'])->name('category_list');
    Route::get('/add-category', [ProductController::class, 'add_category'])->name('add_category');
    Route::post('/add-category-action', [ProductController::class, 'add_category_action'])->name('add_category_action');
    Route::get('/edit-category/{id}', [ProductController::class, 'edit_category'])->name('edit_category');
    Route::post('/edit-category-action/{id}', [ProductController::class, 'edit_category_action'])->name('edit_category_action');
    Route::get('/delete-category-action/{id}', [ProductController::class, 'delete_category_action'])->name('delete_category_action');
    Route::get('/update-category-status/{id}', [ProductController::class, 'update_category_status'])->name('update_category_status');

    //PRODUCT ROUTE
    Route::get('/product-list', [ProductController::class, 'product_list'])->name('product_list');
    Route::get('/add-product', [ProductController::class, 'add_product'])->name('add_product');
    Route::post('/add-product-action', [ProductController::class, 'add_product_action'])->name('add_product_action');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit_product'])->name('edit_product');
    Route::post('/edit-product-action/{id}', [ProductController::class, 'edit_product_action'])->name('edit_product_action');
    Route::get('/delete-product-action/{id}', [ProductController::class, 'delete_product_action'])->name('delete_product_action');
    Route::get('/update-product-status/{id}', [ProductController::class, 'update_product_status'])->name('update_product_status');

});

//FRONTEND ROUTE
Route::group(['middleware' => 'guest'], function () {
    Route::get('/admin/login', [AdminAuthController::class, 'admin_login'])->name('login');
    Route::post('/admin-login-action', [AdminAuthController::class, 'admin_login_action'])->name('admin.login.action');
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('/product-details/{slug}', [FrontendController::class, 'product_details'])->name('product_details');
    Route::get('/category/{id}', [FrontendController::class, 'product_cat'])->name('product_cat');
    Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');


});
