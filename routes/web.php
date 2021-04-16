<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Route::get('/contact', function () { return view('contact'); });

Route::get('/about', function () { return view('about'); });

Route::get('/blogs', function () { return view('blogs'); });

Route::get('/policy', function () { return view('policy'); });

Route::get('/careers', function () { return view('careers'); });

Route::get('/report_error', function () { return view('report_error'); });

Route::get('/dashboard', function () {return view('admin.dashboard'); });

Route::get('/products', function () {return view('admin.products_show'); });

Route::get('/create-products', function () {return view('admin.create_products'); });

Route::post('/product-created', '\App\Http\Controllers\WebsiteController@CreateProduct');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('contact', '\App\Http\Controllers\WebsiteController@contact');

Route::post('error-report', '\App\Http\Controllers\WebsiteController@ReportError');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
