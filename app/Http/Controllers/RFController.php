<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RFController extends Controller
{
    public function tampil()
    {
        $result = DB::select("select * from pokemons");
        return view('home', ['pokemons' => $result]);
    }
}
