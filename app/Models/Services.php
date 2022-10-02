<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];


    public function Cost()
    {

        return $this->hasOne(Cost::class);
    }
    public function Bookings()
    {
        return $this->belongsToMany(Bookings::class);
    }
}
