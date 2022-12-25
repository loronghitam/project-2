<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/product',[PageController::class,'product']);

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/blog',[PageController::class,'menu']);
Route::get('/blog/{slug}',[PageController::class,'menuDetails']);
Route::get('/login', function () {
    return view('admin.login');
});

Route::post('/login', [AuthController::class,'login'])->name('login');
Route::get('/menudetails', function () {
    return view('menuDetails');
});



Route::middleware('auth')->group(function () {
    Route::get('/products', [ProductController::class,'index']);
    Route::post('/products', [ProductController::class,'store']);
    Route::get('/products/{product_id}', [ProductController::class,'show']);
    Route::post('/products/{product_id}', [ProductController::class,'update']);
    Route::delete('/products/{product_id}', [ProductController::class,'destroy']);

    Route::get('/blogs', [BlogController::class,'index']);
    Route::post('/blogs', [BlogController::class,'store']);
    Route::get('/blogs/{blog_id}', [BlogController::class,'show']);
    Route::post('/blogs/{blog_id}', [BlogController::class,'update']);
    Route::delete('/blogs/{blog_id}', [BlogController::class,'destroy']);

    Route::get('/dashboard', [PageController::class,'dashboard']);
    Route::post('/user', [AuthController::class,'edit'])->name('edit');
    Route::get('/user', function () {
        return view('admin.page.profile');
    });

    Route::post('/logout', [AuthController::class,'logout'])->name('logout');

});
