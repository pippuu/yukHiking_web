<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_agent',
        'Nama_Barang',
        'Stock',
        'Harga',
        'ID_Penyewa',
        'ID_Transaksi'
    ];
}
