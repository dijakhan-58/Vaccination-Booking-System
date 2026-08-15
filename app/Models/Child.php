<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $fillable = [
        'parent_id',
        'first_name',
        'last_name',
        'dob',
        'gender',
        'blood_group',
        'b_form_number',
        'weight',
        'medical_notes',
        'allergy_notes',
    ];

    protected $casts = [
        'dob' => 'date',
        'weight' => 'decimal:2',
    ];

    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}