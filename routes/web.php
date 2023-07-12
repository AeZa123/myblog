<?php

use App\Http\Controllers\dashboard\LaravelBlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\dashboard\MemberController;
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
Route::get('blog-laravel',[HomeController::class, 'blogLavavel'])->name('blogs.laravel');
Route::get('blog-html',[HomeController::class, 'blogHtml'])->name('blogs.html');
Route::get('showBlog/{id}',[HomeController::class, 'showBlog']);
Route::get('search',[HomeController::class, 'search']);





    
    
// private link

//dashboard
Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');

    //blogs
    Route::get('table/laravel',[LaravelBlogController::class, 'index'])->name('table-laravel');
    Route::get('blog/laravel/edit/{id}',[LaravelBlogController::class, 'edit']);
    Route::get('table/laravel/search',[LaravelBlogController::class, 'search']);
    Route::get('form/blog/laravel',[LaravelBlogController::class, 'create'])->name('laravelblog');
    Route::post('store/laravel',[LaravelBlogController::class, 'store']);
    Route::post('update/laravel/{id}',[LaravelBlogController::class, 'update']);
    Route::post('blog/destroy',[LaravelBlogController::class, 'destroy'])->name('destroy');

    //members
    Route::get('/members', [MemberController::class, 'index'])->name('show.members');
    Route::post('/member/store', [MemberController::class, 'stroe'])->name('store.member');


// Route::get('form-blog',[BlogLaravelController::class, 'createBlog']);



Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//test
