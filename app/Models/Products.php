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
        return $this->hasOne(SubCategory::class);
    }

    public function productvariants()
    {
        return $this->hasMany(ProductVariant::class);
    }


}
