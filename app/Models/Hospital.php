<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'city',
        'status',
    ];

    protected $hidden = [
        'password',
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