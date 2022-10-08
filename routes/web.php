<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogLaravelController;

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


Route::get('/',[HomeController::class, 'home']);
Route::get('about',[HomeController::class, 'about']);
Route::get('service',[HomeController::class, 'service']);
Route::get('contact',[HomeController::class, 'contact']);
Route::get('login',[HomeController::class, 'login']);


//Blog Laravel
Route::get('blog-laravel',[BlogLaravelController::class, 'index']);
Route::get('form-blog',[BlogLaravelController::class, 'createBlog']);
Route::post('create-blog',[BlogLaravelController::class, 'store']);




//สร้างเงื่อนไขตรวจสอบ name ใน url
// Route::get('/test/{name}', function ($name) {
//     return $name;
// })->where('name', '[A-Za-z]+');

