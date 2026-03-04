<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pelanggan;


Route::get('/', function () {
    return view('welcome');
});
