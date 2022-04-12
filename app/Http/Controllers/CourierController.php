<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courier;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CourierController extends Controller
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
            'username' => ['required'],
            'password' => ['required'],
            'status' => ['required'],
        ]);

        $courier = new Courier;
        $courier->username = $request->username;
        $courier->password = Hash::make($request->password);
        $courier->status = $request->status;

        $courier->save();

        return redirect('/couriers');
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
        $couriers = DB::table('couriers')->get();

        return view('couriers')->with('couriers', $couriers);
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
    public function update(Request $request, $courier)
    {
        $request->validate([
            'username' => ['required'],
            'status' => ['required'],
        ]);

        DB::table('couriers')->updateOrInsert(
            ['username' => $courier],
            ['username' => $request->username, 'status' => $request->status]
        );

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($courier)
    {
        DB::table('couriers')->where('username', $courier)->delete();

        return redirect()->back();
    }

    public function destroyAll()
    {
        DB::table('couriers')->truncate();

        return redirect()->back();
    }
}
