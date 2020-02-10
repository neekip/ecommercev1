<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }
    public function setAuthorAttribute($value)
    {
        $this->attributes['author'] = ucwords($value);
    }

    public function setProductCodeAttribute($value)
    {
        $this->attributes['product_code'] = strtoupper($value);
    }
}
