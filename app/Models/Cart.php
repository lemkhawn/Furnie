<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $fillable = [
        'product_id', 'user_id', 'quantity'
    ];
    protected $table = 'cart';

    // public function linkCartProduct()
    // {
    //     return $this->hasMany('App\Models\Cart', 'id','user_id');
    // }

    // public function linkCartUser()
    // {
    //     return $this->hasMany('App\Cart' , 'id', 'product_id');
    // }
=======
    protected $table = 'carts';
    protected $fillable = ['product_id', 'user_id', 'quantity'];
    
>>>>>>> KienNg
}
