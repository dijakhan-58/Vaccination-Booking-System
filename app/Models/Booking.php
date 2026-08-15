<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'child_id',
        'hospital_id',
        'vaccine_id',
        'created_by',
        'approved_by',
        'booking_number',
        'preferred_date',
        'appointment_time',
        'reason',
        'status',
        'approved_at',
    ];

    protected $casts = [
        'preferred_date' => 'date',
        'approved_at' => 'datetime',
    ];

    public function child()
    {
        return $this->belongsTo(Child::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function vaccine()
    {
        return $this->belongsTo(Vaccine::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function vaccinationRecord()
    {
        return $this->hasOne(VaccinationRecord::class);
    }
}