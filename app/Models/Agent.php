<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_agent',
        'username',
        'password',
        'alamat',
        'status',
        'ID_card',
        'alasan_decline',
    ];

    protected $hidden = [
        'password',
    ];
}
