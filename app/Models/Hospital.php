<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'name',
        'city',
        'address',
        'floors',
        'timings_slot',
        'status',
        'profile_img',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

  

    public function users()
    {
        return $this->hasMany(User::class);
    }
}