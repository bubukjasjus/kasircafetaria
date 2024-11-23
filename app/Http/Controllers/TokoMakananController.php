<?php

namespace App\Http\Controllers;

use App\Models\TokoMakanan;
use Illuminate\Http\Request;

class TokoMakananController extends Controller
{
    public function index()
    {
        $data = TokoMakanan::all();
        return view('home', compact('data'));
    }

    public function create()
    {
        return view('toko-makanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_makanan' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('gambar')->store('public/gambar');

        TokoMakanan::create([
            'nama_makanan' => $request->nama_makanan,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => basename($path),
        ]);

        return redirect()->route('toko-makanan.index')->with('success', 'Makanan berhasil ditambahkan!');
    }

    public function show(TokoMakanan $tokoMakanan)
    {
        return view('toko-makanan.show', compact('tokoMakanan'));
    }

    public function edit(TokoMakanan $tokoMakanan)
    {
        return view('toko-makanan.edit', compact('tokoMakanan'));
    }

    public function update(Request $request, TokoMakanan $tokoMakanan)
    {
        $request->validate([
            'nama_makanan' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        $tokoMakanan->update($request->all());

        return redirect()->route('toko-makanan.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(TokoMakanan $tokoMakanan)
    {
        $tokoMakanan->delete();
        return redirect()->route('toko-makanan.index')->with('success', 'Data berhasil dihapus!');
    }
}
