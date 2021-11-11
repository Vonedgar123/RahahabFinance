<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RFController extends Controller
{
    public function login()
    {
        return view('login');
    }
}
