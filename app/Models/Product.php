<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_product',
        'name_product',
        'description_product',
        'price_product',
        'image_product',
        'category_product'
    ];
}
