<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_Items',
        'ID_Agent',
        'Nama',
        'Stock',
        'Harga',

    ];
}
