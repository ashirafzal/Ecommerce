<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes;

    public function products()
    {
        return $this->hasMany(Products::class);
    }

    public function country()
    {
        return $this->hasOne(Country::class,'id','country_id');
    }

    public function city()
    {
        return $this->hasOne(City::class,'id','city_id');
    }

}