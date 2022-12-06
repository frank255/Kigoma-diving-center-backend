<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Booking extends Model
{
    use HasFactory;
    public $incrementing = false;


    protected $fillable = ['booking_reference', 'fullname', 'nationality', 'email', 'no_people', 'no_children', 'allergies', 'services', 'start', 'end', 'info'];

    public function Service()
    {
        return $this->belongsToMany(Services::class);
    }
    protected $casts = [
        'services' => 'array',
    ];
    public function setCatAttribute($value)
    {
        $this->attributes['services'] = json_encode($value);
    }

    protected static function booted()
    {
        static::creating(function ($bookings) {
            $bookings->booking_reference = Str::random($length = 6);
        });
    }

    /**
     * Get the categories
     *
     */
    public function getCatAttribute($value)
    {
        return $this->attributes['services'] = json_decode($value);
    }
}
