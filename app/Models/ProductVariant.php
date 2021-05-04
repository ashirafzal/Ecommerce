<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVariant extends Model
{
    public $table = 'product_variants';

    use HasFactory,SoftDeletes;

    public function variantvalues()
    {
        return $this->hasMany(VariantValue::class);
    }

    public function product()
    {
        return $this->hasOne(Products::class,'id','product_id');
    }

}
