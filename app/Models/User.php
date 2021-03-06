<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
   // use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    // protected $table = 'users';	

    protected $fillable = [
        'username', 
        'user_fullname', 
        'user_email', 
        'user_phonenumber', 
        'password', 
        'user_role', 
        'user_gender'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $keyType = 'string';

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $primaryKey = 'id';
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD
    public function getAuthPassword()
    {
        return $this->attributes['password'];
    }

    // public function linkCart()
    // {
    //     return $this->hasMany('App\Models\Cart', 'id','user_id');
    // }
=======
>>>>>>> KienNg
}
