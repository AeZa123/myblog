<?php

use App\Http\Controllers\dashboard\LaravelBlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\BlogLaravelController;
use App\Http\Controllers\dashboard\DashboardController;

// use App\Http\Controllers\dashboard\DashBoardBlogLaravelController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// public link
Route::get('/',[HomeController::class, 'index']);
Route::get('about',[HomeController::class, 'about']);
Route::get('service',[HomeController::class, 'service']);
Route::get('contact',[HomeController::class, 'contact']);
Route::get('login',[HomeController::class, 'login']);

//Blog Laravel
Route::get('blog-laravel',[HomeController::class, 'blog'])->name('blog-laravel');
Route::get('showBlog/{id}',[HomeController::class, 'showBlog']);





    
    
// private link

//dashboard
Route::get('dashboard',[DashboardController::class, 'index']);
Route::get('table/laravel',[LaravelBlogController::class, 'index'])->name('table-laravel');
Route::get('blog/laravel/edit/{id}',[LaravelBlogController::class, 'edit']);
Route::get('table/laravel/search',[LaravelBlogController::class, 'search']);
Route::get('form/blog/laravel',[LaravelBlogController::class, 'create'])->name('laravelblog');
Route::post('store/laravel',[LaravelBlogController::class, 'store']);
Route::post('update/laravel/{id}',[LaravelBlogController::class, 'update']);


// Route::get('form-blog',[BlogLaravelController::class, 'createBlog']);



Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
