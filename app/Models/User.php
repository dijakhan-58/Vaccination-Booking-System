<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;



class User extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'phone',
        'cnic',
        'city',
        'emergency_contact',
        'hospital_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

   
    public function children()
    {
        return $this->hasMany(Child::class, 'parent_id');
    }


    public function bookings()
    {
        return $this->hasMany(Booking::class, 'created_by');
    }


    public function approvedBookings()
    {
        return $this->hasMany(Booking::class, 'approved_by');
    }

  
    public function vaccinationRecords()
    {
        return $this->hasMany(VaccinationRecord::class, 'administered_by');
    }


    public function notifications()
    {
        return $this->hasMany(Notification::class, 'parent_id');
    }

  
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}