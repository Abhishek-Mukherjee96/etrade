<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\UserAuthController;

//ADMIN ROUTE
Route::get('/admin/login', [AdminAuthController::class, 'admin_login'])->name('login');
Route::post('/admin-login-action', [AdminAuthController::class, 'admin_login_action'])->name('admin.login.action');
Route::group(['middleware' => 'auth'], function () {
    //PRODUCT ROUTE
    Route::get('/category-list', [ProductController::class, 'category_list'])->name('category_list');
    Route::get('/add-category', [ProductController::class, 'add_category'])->name('add_category');
    Route::post('/add-category-action', [ProductController::class, 'add_category_action'])->name('add_category_action');
    Route::get('/edit-category/{id}', [ProductController::class, 'edit_category'])->name('edit_category');
    Route::post('/edit-category-action/{id}', [ProductController::class, 'edit_category_action'])->name('edit_category_action');
    Route::get('/delete-category-action/{id}', [ProductController::class, 'delete_category_action'])->name('delete_category_action');
    Route::get('/update-category-status/{id}', [ProductController::class, 'update_category_status'])->name('update_category_status');

    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::get('/get-session-data', [AdminAuthController::class, 'get_session_data'])->name('get_session_data');

    //PROFILE ROUTE
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('/update-profile', [ProfileController::class, 'update_profile'])->name('update_profile');
    Route::post('/update-password', [ProfileController::class, 'update_password'])->name('update_password');

    //PRODUCT ROUTE
    Route::get('/product-list', [ProductController::class, 'product_list'])->name('product_list');
    Route::get('/add-product', [ProductController::class, 'add_product'])->name('add_product');
    Route::post('/add-product-action', [ProductController::class, 'add_product_action'])->name('add_product_action');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit_product'])->name('edit_product');
    Route::post('/edit-product-action/{id}', [ProductController::class, 'edit_product_action'])->name('edit_product_action');
    Route::get('/delete-product-action/{id}', [ProductController::class, 'delete_product_action'])->name('delete_product_action');
    Route::get('/update-product-status/{id}', [ProductController::class, 'update_product_status'])->name('update_product_status');

    //COUPON CODE ROUTE
    Route::get('/coupon-list', [ProductController::class, 'coupon_list'])->name('coupon_list');
    Route::get('/add-coupon', [ProductController::class, 'add_coupon'])->name('add_coupon');
    Route::post('/add-coupon-action', [ProductController::class, 'add_coupon_action'])->name('add_coupon_action');
    Route::get('/edit-coupon/{id}', [ProductController::class, 'edit_coupon'])->name('edit_coupon');
    Route::post('/edit-coupon-action/{id}', [ProductController::class, 'edit_coupon_action'])->name('edit_coupon_action');
    Route::get('/delete-coupon-action/{id}', [ProductController::class, 'delete_coupon_action'])->name('delete_coupon_action');
    Route::get('/update-coupon-status/{id}', [ProductController::class, 'update_coupon_status'])->name('update_coupon_status');
});

//FRONTEND ROUTE
Route::group(['middleware' => 'auth'], function () {
    Route::get('/cart', [CartController::class, 'view_cart'])->name('view_cart');
    Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::post('/place-order', [CheckoutController::class, 'place_order'])->name('place_order');
    Route::get('/my-orders', [FrontendController::class, 'my_orders'])->name('my_orders');
    Route::get('/view-order/{id}', [FrontendController::class, 'view_order'])->name('view_order');

});
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::post('/register', [UserAuthController::class, 'register'])->name('user.register');
Route::post('/login', [UserAuthController::class, 'user_login'])->name('user.login');
Route::get('/user-logout', [UserAuthController::class, 'user_logout'])->name('user.logout');
Route::get('/product-details/{slug}', [FrontendController::class, 'product_details'])->name('product_details');
Route::post('/add-to-cart', [CartController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('/load-cart-data', [CartController::class, 'cart_count'])->name('cart_count');
Route::post('/delete-cart-item', [CartController::class, 'delete_cart_item'])->name('delete_cart_item');
Route::post('/update-cart', [CartController::class, 'update_cart'])->name('update_cart');
Route::get('/product-update', [FrontendController::class, 'product_update'])->name('product_update');
Route::get('/category/{id}', [FrontendController::class, 'product_cat'])->name('product_cat');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/product-list', [FrontendController::class, 'product_list_ajax'])->name('product_list_ajax');
Route::post('/search-product', [FrontendController::class, 'search_product'])->name('search_product');
Route::post('/check-coupon-code', [CheckoutController::class, 'check_coupon_code'])->name('check_coupon_code');
