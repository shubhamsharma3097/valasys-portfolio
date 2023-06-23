<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function(){
    return view('about_us');
});

Route::get('/home-1', function(){
    return view('home1');
});

Route::get('/home-2', function(){
    return view('home2');
});

Route::get('/services', function(){
    return view('service');
});

Route::get('/our-team', function(){
    return view('our_team');
});

Route::get('/clients', function(){
    return view('client');
});

Route::get('/faq', function(){
    return view('faq');
});

Route::get('/error', function(){
    return view('error');
});

Route::get('/portfolio', function(){
    return view('portfolio');
});

Route::get('/portfolio-details', function(){
    return view('portfolio_details');
});

Route::get('/blog', function(){
    return view('blog');
});

Route::get('/blog-details', function(){
    return view('blog_details');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/abc', function(){
    return view('abc');
});

