<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiPenyewaan extends Controller
{
    Public Function index():view
    {
        $pelanggan= \APP\Models\TransaksiPenyewaan::all;
        return view('user.index', compact('transaksipenyewaan'));
    }
    Public Function create():view
    {
        return view('user.create');
    }
    Public Function store(Request $request)
    {
        $request ->validate([
           'penyewa'=> 'required | string | nama',
           'tanggal sewa'=> 'requred'
           
        ]);
    }
}


