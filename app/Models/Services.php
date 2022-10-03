<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Services extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = ['name', 'description', 'price'];


    public function Bookings()
    {
        return $this->belongsToMany(Bookings::class);
    }
    protected $casts = [
        'services' => 'array',
    ];
}
