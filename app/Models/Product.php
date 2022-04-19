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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
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

    // public function linkCart()
    // {
    //     return $this->hasMany('App\Cart' , 'id', 'product_id');
    // }
}
