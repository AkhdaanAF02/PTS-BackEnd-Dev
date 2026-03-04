<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pelanggan extends Controller
{
    public function index():view {
        $pelanggan = \app\models\pelanggan::all;
        return view('pelanggan.index', compact('pelanggan'));
    }
    public function create():view {
        return view('pelanggan.create');
    }
    public function store(request $request)
    {
        $request -> validate ([
            'admin' => 'required string max:255,',
            'inventarisbarang' => 'required string max:255',
            'pelanggan' => 'required string max:255',
            'transaksipenyewaan' => 'required string max:255',
            'user' => 'required string max:255',
        ]);
        \App\Model\Pelanggan::create($request->all());
        return redirect()-> route ('pelanggan.index ')
        ->with('success', 'pelanggan berhasil ditambahkan');
    }
    public function destroy (string $id)
    {$pelanggan = \App\models\pelanggan::FindorFail($id);
    $pelanggan->delete();
    return redirect ()->route('pelanggan.index')->with('succes', 'nama berhasil');
    }
    public function edit(string $id)
    {
        $tenant = \App\Models\Tenant::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'admin' => 'required',
            'pelanggan' => 'required',
            'transaksipenyewaan' => 'required|email|unique:pelanggan,email,' . $id,
            'inventarisbarang' => 'required',
            'user' => 'required',
        ]);
         $tenant = \App\Models\Tenant::findOrFail($id);
        $tenant->update($request->all());
    
        return redirect()->route('pelanggan.index')
            ->with('success', 'nama berhasil successfully');
    }

    }
    