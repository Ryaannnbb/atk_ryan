<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        $barang = Barang::all();
        return view('barang.databarang', compact('barang', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Barang::create($request->all());
        return redirect()->route('barang')->with('success', 'Barang Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $barang = Barang::find($id);
        $barang->update($request->all());
        return redirect()->route('barang')->with("success", "Data Barang berhasil diperbarui.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::find($id);
        if ($barang) {
            Barang::destroy($id);
            return redirect()->route('barang')->with('success', 'Barang berhasil dihapus.');
        } else {
            return redirect()->route('barang')->with('error', 'Barang tidak ditemukan.');
        }
    }
}
