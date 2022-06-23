<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    //
    public function create(Request $request)
    // request: tanggal_sewa, tanggal_kembali
    {
        $request->validate([
            'tanggal_sewa' => ['required'],
            'tanggal_kembali' => ['required']
        ]);

        $transaksi = new Transaksi();
        $transaksi->tanggal_sewa = $request->tanggal_sewa;
        $transaksi->tanggal_kembali = $request->alamat_kembali;

        $transaksi->save();

        return redirect('/transaksis');
    }
}
