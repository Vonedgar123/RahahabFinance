<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RFController;


Route::get('/', [RFController::class, 'login']);
