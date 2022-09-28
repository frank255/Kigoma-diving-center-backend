<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;
    protected $fillable = ['fullname', 'title', 'comment', 'is_published'];
    protected $casts = [
        'is_published' => 'boolean',
    ];
}
