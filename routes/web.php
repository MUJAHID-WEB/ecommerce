<?php

use App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Product;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\BrandController;
use App\Http\Controllers\Product\MainCategoryController;
use App\Http\Controllers\Product\CategoryController;
use App\Http\Controllers\Product\SubCategoryController;
use App\Http\Controllers\Product\ColorController;
use App\Http\Controllers\Product\SizeController;
use App\Http\Controllers\Product\WriterController;
use App\Http\Controllers\Product\PublicationController;
use App\Http\Controllers\Product\StatusController;
use App\Http\Controllers\Product\UnitController;
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\WebsiteController::class, 'index'])->name('website_index');
Route::get('/products', [App\Http\Controllers\WebsiteController::class, 'products'])->name('website_products');
Route::get('/products_details', [App\Http\Controllers\WebsiteController::class, 'products_details'])->name('website_products_details');
Route::get('/cart', [App\Http\Controllers\WebsiteController::class, 'cart'])->name('website_cart');
Route::get('/checkout', [App\Http\Controllers\WebsiteController::class, 'checkout'])->name('website_checkout');
Route::get('/wishlist', [App\Http\Controllers\WebsiteController::class, 'wishlist'])->name('website_wishlist');
Route::get('/contact', [App\Http\Controllers\WebsiteController::class, 'contact'])->name('website_contact');




// Admin Panel

Route::middleware(['auth'])->prefix('admin')->group (function(){
    Route::get('/', [Admin\AdminController::class, 'index'])->name('admin_index');
});

Route::middleware(['auth'])->prefix('blank')->group (function(){

    Route::get('/blade_index', [Admin\AdminController::class, 'blade_index'])->name('admin_blade_index');
    Route::get('/blade_create', [Admin\AdminController::class, 'blade_create'])->name('admin_blade_create');
    Route::get('/blade_view', [Admin\AdminController::class, 'blade_view'])->name('admin_blade_view');
});

Route::middleware(['auth'])->prefix('user')->group (function(){

    Route::get('/index', [Admin\UserController::class, 'index'])->name('admin_user_index');
    Route::get('/view/{id}', [Admin\UserController::class, 'view'])->name('admin_user_view');
    Route::get('/create', [Admin\UserController::class, 'create'])->name('admin_user_create');
    Route::POST('/store', [Admin\UserController::class, 'store'])->name('admin_user_store');
    Route::get('/edit/{id}', [Admin\UserController::class, 'edit'])->name('admin_user_edit');
    Route::POST('/update', [Admin\UserController::class, 'update'])->name('admin_user_update');
    Route::POST('/delete', [Admin\UserController::class, 'delete'])->name('admin_user_delete');
});

Route::middleware(['auth'])->prefix('user-role')->group (function(){

    Route::get('/index', [Admin\UserRoleController::class, 'index'])->name('admin_user_role_index');
    Route::get('/view', [Admin\UserRoleController::class, 'view'])->name('admin_user_role_view');
    Route::get('/create', [Admin\UserRoleController::class, 'create'])->name('admin_user_role_create');
    Route::POST('/store', [Admin\UserRoleController::class, 'store'])->name('admin_user_role_store');
    Route::get('/edit', [Admin\UserRoleController::class, 'edit'])->name('admin_user_role_edit');
    Route::POST('/update', [Admin\UserRoleController::class, 'update'])->name('admin_user_role_update');
    Route::POST('/delete', [Admin\UserRoleController::class, 'delete'])->name('admin_user_role_delete');
});

Route::middleware(['auth'])->prefix('admin/product')->group (function(){

    Route::resource('product', ProductController::class);
    

    Route::resource('brand', BrandController::class);
    Route::resource('main_category', MainCategoryController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('sub_category', SubCategoryController::class);
    Route::resource('color', ColorController::class);
    Route::resource('size', SizeController::class);
    Route::resource('status', StatusController::class);
    Route::resource('unit', UnitController::class);
    Route::resource('writer', WriterController::class);
    Route::resource('publication', PublicationController::class);

    Route::get('/get-all-category-selected-by-main-category/{main_category_id}', [Product\CategoryController::class, 'get_category_by_main_category'])->name('get_all_category_selected_by_main_category');
    Route::get('/get-all-main-category-json', [Product\MainCategoryController::class, 'get_main_category_json'])->name('get_main_category_json');
    Route::get('/get-all-category-json', [Product\CategoryController::class, 'get_category_json'])->name('get_category_json');
    
});

