<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory,SoftDeletes;

    public $table = 'products';

    public function subcategory()
    {
        return $this->hasOne(SubCategory::class,'id','sub_category_id');
    }

    public function productvariants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function brand()
    {
        return $this->hasOne(Brand::class,'id','brand_id');
    }

    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function vendor()
    {
        return $this->hasOne(Vendor::class,'id','vendor_id');
    }

    public function variants()
    {
        return $this->hasMany(VariantValue::class);
    }

}
