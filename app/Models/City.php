<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory,SoftDeletes;

    public function country()
    {
        return $this->hasOne(Country::class,'id','country_id');
    }

    public function brands()
    {
        return $this->hasMany(Brands::class);
    }
}
