<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalusers = DB::table('users')->count();
        return view('dashboard')->with('totalusers', $totalusers);
    }
}
