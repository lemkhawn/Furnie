<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Product extends Model
{
    use HasFactory;
    // use HasMediaTrait;

    protected $table = 'products';
    protected $fillable = [
        // 'productid', 
        'productname', 
        'price', 
        'size', 
        'color', 
        'images', 
        'category_id', 
        'description'
    ];
}
