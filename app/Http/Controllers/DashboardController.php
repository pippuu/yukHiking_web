<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalusers = DB::table('users')->count();
        $totalcouriers = DB::table('couriers')->count();
        $totalitems = DB::table('items')->count();
        $totalagents = DB::table('agents')->count();



        $totaldata = array(
            'totalusers' => $totalusers,
            'totalcouriers' => $totalcouriers,
            'totalitems' => $totalitems,
            'totalagents' => $totalagents,
        );

        return view('dashboard')->with($totaldata);
    }
}
