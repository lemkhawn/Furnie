<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';
    protected $fillable = [
        'blog_name', 'blog_description'
    ];
    protected $casts = [
        'updated_at' => 'datetime',
        'created_at' => 'datetime',
    ];
}