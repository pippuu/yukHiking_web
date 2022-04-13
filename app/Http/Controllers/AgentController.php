<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
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
            'alamat' => ['required'],
            'status' => ['required'],
            'ID_card' => ['required']
        ]);

        $agent = new Agent;
        $agent->username = $request->username;
        $agent->password = Hash::make($request->password);
        $agent->alamat = $request->alamat;
        $agent->status = $request->status;
        $agent->ID_card = $request->ID_card;

        $agent->save();

        return redirect('/agents');
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
        $agentsAccepted = DB::table('agents')->where('status', '!=', 'Pending')->get();
        $agentsPending = DB::table('agents')->where('status', 'Pending')->get();

        $data = [
            'agentsAccepted' => $agentsAccepted,
            'agentsPending' => $agentsPending
        ];

        return view('agents')->with($data);
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
    public function update(Request $request, $agent)
    {
        $request->validate([
            'username' => ['required'],
            'alamat' => ['required'],
            'status' => ['required'],
        ]);

        DB::table('agents')->updateOrInsert(
            ['username' => $agent],
            ['username' => $request->username, 'alamat' => $request->alamat, 'status' => $request->status]
        );

        return redirect()->back();
    }

    public function accept($agent)
    {
        DB::table('agents')->updateOrInsert(
            ['username' => $agent],
            ['status' => 'Nonaktif']
        );

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($agent)
    {
        DB::table('agents')->where('username', $agent)->delete();

        return redirect()->back();
    }

    public function destroyAll()
    {
        DB::table('agents')->truncate();

        return redirect()->back();
    }
}
