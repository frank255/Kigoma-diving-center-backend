<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    protected $fillable = ['booking_reference', 'fullname', 'email', 'whatsapp', 'services', 'start', 'end', 'total_cost'];

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

    /**
     * Get the categories
     *
     */
    public function getCatAttribute($value)
    {
        return $this->attributes['services'] = json_decode($value);
    }
}
