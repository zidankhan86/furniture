<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\HeroBannerController;
use App\Http\Controllers\CompanyLogoController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\frontend\AboutUsController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\SocialShareButtonsController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\frontend\ProductController as FrontendProductController;



//Landing
Route::get('/product',[FrontendProductController::class,'product'])->name('shop');
Route::get('/product-details/{id}',[FrontendProductController::class,'productDetails'])->name('details');
Route::get('/about',[AboutUsController::class,'about'])->name('about');
//Payment
Route::post('/pay/{id}', [SslCommerzPaymentController::class, 'index'])->name('pay.now');
Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
Route::get('/',[FrontendHomeController::class,'home'])->name('home');


//ContactUs
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::post('/contact-form',[ContactController::class,'contactForm'])->name('contact.form.store');
Route::get('/login-frontend', [LoginController::class, 'showLoginFormFrontend'])->name('login.frontend');
//profile
Route::get('/profile',[ProfileController::class,'profile'])->name('profile');
//Auth
Route::controller(LoginController::class)->group(function(){
    Route::get('/login','showLoginForm')->name('login');
    Route::post('/login','loginProcess')->name('login.submit');
    Route::get('/logout','logout')->name('logout');
    Route::get('/registration', 'registration')->name('registration');
    Route::post('/registration', 'registrationStore')->name('registration.submit');
});


Route::group(['middleware' => 'customerAuth'], function () {
    //AddToCard
Route::controller(AddToCartController::class)->group(function(){
    Route::get('add-to-cart/{id}','addToCart')->name('add.to.cart');
    Route::get('/view-cart','viewCart');
    Route::get('/clear-cart','clearCart')->name('cart.clear');
    Route::post('/cart-item/update-quantity/{id}','updateCartQuantity')->name('cart.update.quantity');
    Route::get('/cart-item/delete/{id}','cartItemDelete')->name('cart.item.delete');});
Route::get('/product-checkout/{id}',[FrontendProductController::class,'productCheckout'])->name('product.checkout');

});

//middleware auth and admin
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {

Route::get('/',[HomeController::class,'dashboard'])->name('dashboard');

// Category Routes
Route::get('/category-form', [CategoryController::class, 'categoryForm'])->name('category.form');
Route::post('/category-store', [CategoryController::class, 'categoryStore'])->name('category.store');
Route::get('/category-list', [CategoryController::class, 'categoryList'])->name('category.list');
Route::get('/category-edit/{id}', [CategoryController::class, 'categoryEdit'])->name('category.edit');
Route::post('/category-update/{id}', [CategoryController::class, 'categorupdate'])->name('category.update');
Route::get('/category-delete/{id}', [CategoryController::class, 'categordelete'])->name('category.delete');
// Product Routes
Route::get('/product-form', [ProductController::class, 'productForm'])->name('product.form');
Route::post('/product-store', [ProductController::class, 'productStore'])->name('product.store');
Route::get('/product-list', [ProductController::class, 'productList'])->name('product.list');
Route::get('/product-edit/{id}', [ProductController::class, 'productEdit'])->name('product.edit');
Route::post('/product-update/{id}', [ProductController::class, 'productUpdate'])->name('product.update');
Route::get('/product-delete/{id}', [ProductController::class, 'productDelete'])->name('product.delete');
//Order
Route::controller(OrderController::class)->group(function(){
    Route::get('/order-list','orderList')->name('order.list');
});   
Route::get('/order-confirm/{id}', [OrderController::class, 'confirm'])->name('confirm');
Route::get('/order-cancel/{id}', [OrderController::class, 'cancel'])->name('reject');

Route::controller(ReportController::class)->group(function(){

    Route::get('/report','report')->name('report');
    Route::get('/report/search','reportSearch')->name('order.report.search');
});});



