<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// User all route
Route::controller('UserController')->group(function () {
    Route::get('/', [UserController::class, 'Register'])->name('register');
    Route::post('/create', [UserController::class, 'Create'])->name('create');
    Route::get('/profile', [UserController::class, 'Profile'])->name('profile');
    Route::get('/login', [UserController::class, 'Login'])->name('login');
    Route::post('/signin', [UserController::class, 'Signin'])->name('signin');
    Route::get('/logout', [UserController::class, 'Logout'])->name('logout');
});

// Product all route
Route::controller('ProductController')->group(function () {
    Route::get('/product', [ProductController::class, 'AllProduct'])->name('product');
    Route::get('/rating', [ProductController::class, 'Ratings'])->name('rating');
    Route::get('/search/products', [ProductController::class, 'searchProducts'])->name('search');

});

// Rating all route
Route::controller('ReviewController')->group(function () {
    Route::post('/submit_rating', [ReviewController::class, 'SubmitRating'])->name('submit_rating'); 
    Route::get('/view_rating', [ReviewController::class, 'ViewRating'])->name('view_rating');
    Route::get('/all_rating', [ReviewController::class, 'AllRating'])->name('all_rating');
    Route::get('/search/products', [ReviewController::class, 'searchProducts'])->name('search');
    Route::get('/ratings-analysis', [ReviewController::class, 'ratingsAnalysis'])->name('ratings_analysis');
    Route::get('/analysis', [RatingController::class, 'analysis'])->name('analysis');


});
