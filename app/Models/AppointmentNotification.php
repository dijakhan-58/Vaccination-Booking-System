<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppointmentNotification extends Model
{
    protected $table = 'appointment_notifications';

    protected $fillable = [
        'type',
        'notifiable_type',
        'user_id_fk',
        'data',
        'read_at',
    ];

    protected $casts = [
        'read_at' => 'boolean',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function parent()
    {
        return $this->belongsTo(User::class, 'id');
    }
}