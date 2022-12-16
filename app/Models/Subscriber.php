<?php

namespace App\Models;

use App\Notifications\SubscriptionApproval;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;

class Subscriber extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['email'];

    protected static function booted()
    {
        static::creating(function (Subscriber $subscriber) {
            Notification::route('mail', [$subscriber->email])->notify(new SubscriptionApproval($subscriber));
        });
    }
}
