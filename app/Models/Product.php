<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $fillable = [
        'product_name',
        'product_price',
        'product_description',
        'product_avatar',
        'product_content',
        'product_type',
        'product_supplier',
    ];
}
