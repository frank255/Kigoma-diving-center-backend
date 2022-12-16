<?php

namespace App\Models;

use App\Notifications\BookingCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class Booking extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['booking_reference', 'fullname', 'nationality', 'email', 'no_people', 'no_children', 'allergies', 'services', 'start', 'end', 'info'];

    public function Service()
    {
        return $this->belongsToMany(Service::class);
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
        static::creating(function (Booking $booking) {
            Notification::route('mail', [$booking->email => $booking->fullname])->notify(new BookingCreated($booking));
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
