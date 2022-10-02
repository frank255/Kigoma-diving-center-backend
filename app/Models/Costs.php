<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costs extends Model
{
    use HasFactory;
    protected $fillable = ['service_id', 'amount'];

    public function Services()
    {
        return $this->belongsTo(Services::class);
    }
}
