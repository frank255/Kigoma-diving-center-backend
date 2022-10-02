<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $fillable = ['fullname', 'email', 'whatsapp', 'services', 'start', 'end'];

    public function Service()
    {
        return $this->belongsToMany(Services::class);
    }
}
