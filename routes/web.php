<?php

use Illuminate\Support\Facades\Route;

/*** Main website routes ***/

Route::get('/test-blade', function () {
    return view('test');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contactx');
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

Route::post('/contact-vue', '\App\Http\Controllers\FunctionalityController@submit');

Route::post('/error-report-vue', '\App\Http\Controllers\FunctionalityController@ReportError');

/*** End of main website routes ***/

/*** Dashboard routes ***/

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    /* Test Route */

    Route::get('/test', '\App\Http\Controllers\WebsiteController@test');

    /* Country related routes */

    Route::get('/countries', function () {
        return view('admin.countries_show');
    });

    /* End of country related routes */

    /* Brands related routes */

    Route::get('/brands', function () {
        return view('admin.brand_show');
    });

    /* End of brands related routes */

    /* Categories related routes */

    Route::get('/categories', function () {
        return view('admin.categories_show');
    });

    /* End of categories related routes */

    /* City related routes */

    Route::get('/cities', function () {
        return view('admin.city_show');
    });

    /* End of city related routes */

    /* Product related routes */

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

    /* Product variants related routes */

    Route::get('/product-variants', function () {
        return view('admin.product_variants_show');
    });

    Route::get('/products-variants-create', function () {
        return view('admin.create_products_variants');
    });

    Route::post('/create-variant', '\App\Http\Controllers\WebsiteController@CreateProductVariant');

    /* Variant values related routes */

    Route::get('/variant-values', function () {
        return view('admin.variant_values_show');
    });

    Route::get('/variant-values-create', function () {
        return view('admin.create_variant_value');
    });

    Route::post('/create-variant-value', '\App\Http\Controllers\WebsiteController@CreateVariantValue');

    /* Logout route */

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
});

/*** End of dashboard routes ***/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
