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

    // Parent has many children
    public function children()
    {
        return $this->hasMany(Child::class, 'parent_id');
    }

    // User creates bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'created_by');
    }

    // User approves bookings
    public function approvedBookings()
    {
        return $this->hasMany(Booking::class, 'approved_by');
    }

    // User administers vaccinations
    public function vaccinationRecords()
    {
        return $this->hasMany(VaccinationRecord::class, 'administered_by');
    }

    // User receives notifications
    public function notifications()
    {
        return $this->hasMany(Notification::class, 'parent_id');
    }

    // If a user belongs to a hospital
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}