<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'basket_id',
        'product_id',
        'count'
    ];

    public function product()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }

    public function images()
    {
        return $this->hasMany(ImageProduct::class, 'product_id', 'product_id');
    }
}
