<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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


//Backend

//middleware
//Route::group(['middleware' => 'admin'], function () {
    // Routes that require admin access
//});




Route::get('/',[HomeController::class,'dashboard'])->name('dashboard');
Route::get('/category-form',[CategoryController::class,'categoryForm'])->name('category.form');
Route::post('/category-store',[CategoryController::class,'categoryStore'])->name('category.store');
Route::get('/category-list',[CategoryController::class,'categoryList'])->name('category.list');


Route::get('/product-form',[ProductController::class,'productForm'])->name('product.form');
Route::post('/product-store',[ProductController::class,'productStore'])->name('product.store');
Route::get('/product-list',[ProductController::class,'productList'])->name('product.list');
Route::get('/new-arrival-product-form',[ProductController::class,'NewArrivalproductForm'])->name('new.arrival.product.form');
Route::get('/new-arrival-product-list',[ProductController::class,'NewArrivalproductList'])->name('new.arrival.product.list');
Route::post('/new-product-store',[ProductController::class,'newProductStore'])->name('new.product.store');


Route::get('/bannder-form',[BannerController::class,'bannerForm'])->name('banner.form');
Route::post('/bannder-store',[BannerController::class,'bannerStore'])->name('banner.store');


Route::get('/blog-form',[BlogController::class,'blogPost'])->name('blog.post');
Route::post('/blog-store',[BlogController::class,'blogStore'])->name('blog.store');


