<?php

use Illuminate\Support\Facades\Route;

/*** Main website routes ***/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/policy', function () {
    return view('policy');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/report_error', function () {
    return view('report_error');
});

Route::post('contact', '\App\Http\Controllers\WebsiteController@contact');

Route::post('error-report', '\App\Http\Controllers\WebsiteController@ReportError');

/*** End of main website routes ***/

/*** Dashboard routes ***/

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/products', function () {
        return view('admin.products_show');
    });

    Route::get('/create-products', function () {
        return view('admin.create_products');
    });

    Route::post('/product-created', '\App\Http\Controllers\WebsiteController@CreateProduct');

    Route::get('/{id}/product', '\App\Http\Controllers\WebsiteController@ViewProduct');

    Route::get('/{id}/product/detail', '\App\Http\Controllers\WebsiteController@ProductDetail');

    Route::put('/{id}/update-product', '\App\Http\Controllers\WebsiteController@UpdateProduct');

    Route::delete('/{id}/delete-product', '\App\Http\Controllers\WebsiteController@DestroyProduct');

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
});

/*** End of dashboard routes ***/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
