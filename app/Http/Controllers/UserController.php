<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function index($users)
    {
        // dd($users);
        return view('users')->with('users', $users);
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
        ]);


        $user = new User;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->alamat = $request->alamat;

        $user->save();

        return response()->json(['success' => 'Successfully']);
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
        $users = DB::table('users')->get();

        return $this->index($users);
        // return view('users')->with('users', $users);
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
    public function update(Request $request, $user)
    {
        $request->validate([
            'username' => ['required'],
            'alamat' => ['required'],
        ]);

        DB::table('users')
            ->updateOrInsert(
                ['username' => $user],
                ['username' => $request->username, 'alamat' => $request->alamat]
            );

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        DB::table('users')->where('username', $user)->delete();

        return redirect()->back();
    }

    public function destroyAll()
    {
        DB::table('users')->truncate();

        return redirect()->back();
    }

    public function search(Request $request)
    {
        $key = $request->inputSearch;
        $users = DB::table('users')->where('username', 'LIKE', '%' . $key . '%')->get();
        return $this->index($users);
    }
}
