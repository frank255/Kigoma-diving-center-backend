<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Testimonials extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $fillable = ['fullname', 'title', 'comment', 'is_published'];
    protected $casts = [
        'is_published' => 'boolean',
    ];
}
