<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'product_image',
        'product_name',
        'product_description',
        'product_price',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'product_price', 'id');
    }

    public function items()
    {
        return $this->hasOne(items::class, 'product_id', 'id');
    }
}
