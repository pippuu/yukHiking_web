<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\DB;

class ItemControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return response()->json($items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    // request: id_item, id_penyewa, jumlah_sewa, id_transaksi
    {
        // $defaultStock = DB::table('items')->where('ID_Items', $request->id_item)->get()[0]->Stock;
        // $targetItem = DB::table('items')->where('ID_Items', $request->id_item);

        // $targetItem->update(['Stock' => $defaultStock - $request->jumlah_sewa]);

        // $newItem = new Item;
        // $newItem->ID_Agent = $targetItem->get()[0]->ID_Agent;
        // $newItem->Nama_Agent = $targetItem->get()[0]->Nama_Agent;
        // $newItem->Nama_Barang = $targetItem->get()[0]->Nama_Barang;
        // $newItem->Stock = $request->jumlah_sewa;
        // $newItem->Harga = $targetItem->get()[0]->Harga;
        // $newItem->ID_Penyewa = $request->id_penyewa;
        // $newItem->tanggal_sewa = date("Y-m-d");
        // $newItem->save();

        $defaultStock = DB::table('items')->where('ID_Items', $request->id_item)->get()[0]->Stock;
        $targetItem = DB::table('items')->where('ID_Items', $request->id_item);

        $targetItem->update(['Stock' => $defaultStock - $request->jumlah_sewa]);

        $newItem = new Item;
        $newItem->ID_Agent = $targetItem->get()[0]->ID_Agent;
        $newItem->Nama_Barang = $targetItem->get()[0]->Nama_Barang;
        $newItem->Stock = $request->jumlah_sewa;
        $newItem->Harga = $targetItem->get()[0]->Harga;
        $newItem->Deskripsi = $targetItem->get()[0]->Deskripsi;
        $newItem->ID_Penyewa = $request->id_penyewa;
        $newItem->Late_id = $defaultStock->get()[0]->ID_Items;
        // $newItem->tanggal_sewa = date("Y-m-d");
        $newItem->ID_Transaksi = $request->id_transaksi;

        $newItem->save();

        return response()->json($newItem);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sewaBarang(Request $request)
    // request: id_item, id_penyewa, jumlah_sewa
    {
        // dd(date("Y-m-d"));
        $defaultStock = DB::table('items')->where('ID_Items', $request->id_item)->get()[0]->Stock;
        $targetItem = DB::table('items')->where('ID_Items', $request->id_item);

        $targetItem->update(['Stock' => $defaultStock - $request->jumlah_sewa]);

        $newItem = new Item;
        $newItem->ID_Agent = $targetItem->get()[0]->ID_Agent;
        $newItem->Nama_Barang = $targetItem->get()[0]->Nama_Barang;
        $newItem->Stock = $request->jumlah_sewa;
        $newItem->Harga = $targetItem->get()[0]->Harga;
        $newItem->ID_Penyewa = $request->id_penyewa;
        $newItem->Late_id = $defaultStock->get()[0]->ID_Items;
        $newItem->tanggal_sewa = date("Y-m-d");
        $newItem->save();

        return response()->json($newItem);
    }
}
