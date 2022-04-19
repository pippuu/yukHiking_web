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
        $items->save();

        return redirect('/items');
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
            ['ID_Agent' => $request->ID_Agent, 'Nama_Agent' => $request->Nama_Agent, 'Nama_Barang' => $request->Nama_Barang, 'Stock' => $request->Stock, 'Harga' => $request->Harga]
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
        DB::table('items')->where('ID_Agent', $item)->delete();

        return redirect()->back();
    }

    public function destroyAll()
    {
        DB::table('items')->truncate();

        return redirect()->back();
    }
}
