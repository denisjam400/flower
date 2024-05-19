<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GenController;
use App\Http\Controllers\RootController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

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

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'adminHomePage');
    Route::post('/addProduct', 'addProduct');
    Route::post('/createblog', 'createBlog');
});

Route::controller(RootController::class)->group(function () {
    Route::get('/', 'homePage');
    Route::get('/dashboard', 'homePage')->middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->name('dashboard');
    Route::get('/about-us', 'About');
    Route::get('/faq', 'FAQ');
    Route::get('/blog', 'Blog');
    Route::get('/comment', 'comment');
    Route::get('/contact-us', 'Contact');
    Route::get('/account', 'userProfile')->middleware(['auth']);
});

Route::controller(GenController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/cart', 'getCart');
        Route::post('/cart/{id}', 'addToCart');
        Route::get('/cart/delete/{id}', 'removeFromCart');
        Route::post('/review/{id}', 'submitReview');
        Route::post('/comment/{id}', 'blogComment');
        Route::post('/accountUpdate', 'accountUpdate');
    });
    Route::post('/mail', 'sendMail');
    Route::get('/blog/{id}', 'blogDetail');
    Route::post('/emailSubmission', 'submitEmail');
    Route::get('/blog/{blog}', 'getEachBlogArticle');
});

Route::controller(ShopController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/wishlist', 'wishList');
        Route::post('/wishlist/{id}', 'addToWishlist');
        Route::post('/wishlist/delete/{id}', 'removeFromWishlist');
        Route::get('/checkout', 'checkOut');
        Route::post('/checkout', 'mainCheckOut');
    });
    Route::get('/shop/{id}', 'show');
    Route::get('/shop', 'index');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
