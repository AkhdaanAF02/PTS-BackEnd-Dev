<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    Public Function index():view
    {
        $pelanggan= \APP\Models\Pelanggan::all;
        return view('user.index', compact('pelanggan'));
    }
    Public Function create():view
    {
        return view('user.create');
    }
    Public Function store(Request $request)
    {
        $request ->validate([
            'nama'=> 'required | string | max: 255',
            'email'=> 'required | string | email | max:100 | unique: user',
            'password'=> 'required | string | min: 6 | confirmed',
            'KTP'=> 'required',
            'alamat'=> 'required',
            'nomor telepon'=> 'required',
        ]);
    }
}

