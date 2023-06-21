<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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
// // /second-page is the url on browser
// Route::get('/index', function () {
//     //name from blade.php is from resouce > view 
//     return view('index');
// });


//this is basically used for static page
//1st view is our url
//2nd view is our name of blade.php
//3rd name is where the name is variable name inside app.blade.php (inside layouts folder)
// Route::view('/', view: 'index')-> name(name: 'home1');
Route::view('/about', view: 'about') -> name(name: 'about2');
Route::view('/contact', view: 'contact')-> name(name: 'contact3');

//controller where the function and view is done 
//index is method inside home controller
//home1 is bila kita click pada Home button dekat index dan dia akan route ke index.blade.php dan / sebagai url
Route::get('/', [HomeController::class, 'index'])
    -> name(name: 'home1');


    //for post 
    //first Posts is the url
    //second post is from parameter inside function post controller
    //PostController is the class
    //show is the method inside PostController
    Route::get('posts/{post1}', [PostController::class, 'show'])
    -> name(name: 'post.show');