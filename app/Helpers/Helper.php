<?php

namespace App\Helpers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Country;
use App\Models\Products;
use App\Models\Slider;
use App\Models\SubCategory;

class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }

    public static function categories()
    {
        $categories = Category::where('show_in_outlet', true)
            ->get();

        return $categories;
    }

    public static function subcategories()
    {
        $subcategories = SubCategory::where('show_in_outlet', true)
            ->get();

        return $subcategories;
    }

    public static function sliders()
    {
        $sliders = Slider::where('is_active', true)
            ->where('title', '!=', Null)
            ->where('tittle_theme', '!=', Null)
            ->orderBy('order_number')
            ->get();

        return $sliders;
    }

    public static function brands()
    {
        $brands = Brand::paginate(20);

        return $brands;
    }

    public static function countries()
    {
        $countries = Country::paginate(20);

        return $countries;
    }

    public static function products()
    {
        $products = Products::where('is_active',true)->paginate(50);

        return $products;
    }

}