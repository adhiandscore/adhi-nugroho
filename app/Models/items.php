<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;

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
