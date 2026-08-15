<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VaccinationRecord extends Model
{
    protected $fillable = [
        'booking_id',
        'administered_by',
        'vaccination_date',
        'dose_number',
        'next_dose_date',
        'side_effects',
        'status',
        'remarks',
    ];

    protected $casts = [
        'vaccination_date' => 'date',
        'next_dose_date' => 'date',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function administeredBy()
    {
        return $this->belongsTo(User::class, 'administered_by');
    }

    public function certificate()
    {
        return $this->hasOne(Certificate::class);
    }
}