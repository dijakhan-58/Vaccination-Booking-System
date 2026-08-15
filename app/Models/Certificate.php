<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = [
        'vaccination_id',
        'certificate_number',
        'qr_code',
        'generated_at',
    ];

    protected $casts = [
        'generated_at' => 'datetime',
    ];

    public function vaccinationRecord()
    {
        return $this->belongsTo(
            VaccinationRecord::class,
            'vaccination_id'
        );
    }
}