<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'parent_id',
        'title',
        'message',
        'status',
    ];

    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_id');
    }
}