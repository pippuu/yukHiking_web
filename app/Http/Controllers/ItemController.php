<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'ID_Agent' => ['required'],
            'Nama_Agent' => ['required'],
            'Nama_Barang' => ['required'],
            'Stock' => ['required'],
            'Harga' => ['required'],
        ]);

        $items = new Item;
        $items->ID_Agent = $request->ID_Agent;
        $items->Nama_Agent = $request->Nama_Agent;
        $items->Nama_Barang = $request->Nama_Barang;
        $items->Stock = $request->Stock;
        $items->Harga = $request->Harga;
        $items->ID_Penyewa = $request->ID_Penyewa;
        $items->save();

        return redirect('/items');
    }

    public function sewaBarang(Request $request)
    // request: id_item, id_penyewa, jumlah_sewa
    {
        dd($request);
        // dd(date("Y-m-d"));
        $defaultStock = DB::table('items')->where('ID_Items', $request->id_item)->get()[0]->Stock;
        $targetItem = DB::table('items')->where('ID_Items', $request->id_item);

        $targetItem->update(['Stock' => $defaultStock - $request->jumlah_sewa]);

        $newItem = new Item;
        $newItem->ID_Agent = $targetItem->get()[0]->ID_Agent;
        $newItem->Nama_Agent = $targetItem->get()[0]->Nama_Agent;
        $newItem->Nama_Barang = $targetItem->get()[0]->Nama_Barang;
        $newItem->Stock = $request->jumlah_sewa;
        $newItem->Harga = $targetItem->get()[0]->Harga;
        $newItem->ID_Penyewa = $request->id_penyewa;
        $newItem->tanggal_sewa = date("Y-m-d");
        $newItem->save();

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $items = DB::table('items')->get();

        return view('items')->with('items', $items);
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
    public function update(Request $request, $item)
    {
        $request->validate([
            'ID_Agent' => ['required'],
            'Nama_Agent' => ['required'],
            'Nama_Barang' => ['required'],
            'Stock' => ['required'],
            'Harga' => ['required'],
        ]);

        DB::table('items')->updateOrInsert(
            ['ID_Agent' => $item],
            [
                'ID_Agent' => $request->ID_Agent,
                'Nama_Agent' => $request->Nama_Agent,
                'Nama_Barang' => $request->Nama_Barang,
                'Stock' => $request->Stock,
                'Harga' => $request->Harga,
                'ID_Penyewa' => $request->ID_Penyewa,
                'tanggal_sewa' => $request->tanggal_sewa
            ]
        );

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($item)
    {
        DB::table('items')->where('ID_Items', $item)->delete();

        return redirect()->back();
    }

    public function destroyAll()
    {
        DB::table('items')->truncate();

        return redirect()->back();
    }

    public function test()
    {
        $items = DB::table('items')->get();

        return view('test-sewabarang')->with('items', $items);
    }
}
