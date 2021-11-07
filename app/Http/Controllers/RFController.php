<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RFController extends Controller
{
    public function login()
    {
        $result = DB::select("select * from Pengguna");
        return view('home', ['pokemons' => $result]);
    }
}
