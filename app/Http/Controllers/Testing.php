<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Courier;
use App\Models\Send;
use App\Models\Admin;


class Testing extends Controller
{
    public function testCreate()
    {
        // $admin = new Admin();
        // $admin->username = 'mengadmin';
        // $admin->password = 'mengadmin';
        // $admin->save();

        // return redirect('/');
    }

    public function storeSend()
    {
        // $newSend = new Send();
        // $newSend->status = 'terkirim';
        // $newSend->alamat_user = 'antartica';
        // $newSend->alamat_agen = 'uganda';
        // $newSend->courier_id = 1;

        // $newSend->save();

        // return redirect('/');
    }

    public function showTable()
    {
        $users = DB::table('users')->get();

        foreach ($users as $user) {
            echo $user->username;
        }
    }
}
