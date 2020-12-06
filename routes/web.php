<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\signupController;
use App\Http\Controllers\validationController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;
use App\Http\Controllers\themeController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\createBlogController;
use App\Http\Controllers\routeController;
use App\Http\Middleware\test;
use App\Http\Middleware\authChecker;
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
    return view('index');
});
Route::get('login',[validationController::class,'index']);
Route::post('login',[validationController::class,'loginvalidation'])->name('validation');

Route::get('signup', [signupController::class,'index']);
Route::post('signup', [signupController::class,'store'])->name('contactstore');

Route::get('home', [homeController::class,'index']);
Route::post('home/likepost', [homeController::class,'likepost'])->name('like.post');

Route::get('post', [postController::class,'index']);
Route::post('post/delete', [postController::class,'delete'])->name('delete.post');

Route::get('theme', [themeController::class,'index']);

Route::get('blog/{post_id}' , [blogController::class,'index']);
Route::get('blog/{post_id}/{post_url}' , [blogController::class,'viewBlog']);

Route::get('create' , [createBlogController::class,'index']);
Route::get('create/{post_id}' , [createBlogController::class,'edit']);
Route::post('create/upload' , [createBlogController::class,'upload']);

Route::get('edit/{post_id}' , [createBlogController::class,'edit']);
Route::post('edit/upload' , [createBlogController::class,'upload']);

Route::get('about', function () {
    return view('htmlFiles/about');
});

Route::get('logout', function () {
    session()->flush();
    return redirect('login');
});

Route::get('in/{user_name}' , [routeController::class,'index']);

// Route::get('/{id}' , function(){

//     //echo("hello world");	

// })->middleware(test::class);





