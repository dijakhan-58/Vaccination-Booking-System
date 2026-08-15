<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    protected $fillable = [
        'name',
        'disease',
        'description',
        'dose_count',
        'manufacturer',
        'recommended_age_days',
        'availability_status',
    ];

 

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}