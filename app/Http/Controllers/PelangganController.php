<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pelanggan::all();
        return view('pelanggan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
        return view('pelanggan.create',[
            'obat' => Obat::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelanggan::create(
            [
                'pelanggan_id_obat' => $request->pelanggan_id_obat,
                'pelanggan_nama' => $request->pelanggan_nama,
                'pelanggan_alamat' => $request->pelanggan_alamat,
                'pelanggan_hp' => $request->pelanggan_hp
            ]
        );

        return redirect('pelanggan')->with('success','Data berhasil ditambahkan');
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
        $row = Pelanggan::findOrFail($id);
        return view('pelanggan.edit',[
            'obat' => Obat::get()
        ], compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->update(
            [
                'pelanggan_id_obat' => $request->pelanggan_id_obat,
                'pelanggan_nama' => $request->pelanggan_nama,
                'pelanggan_alamat' => $request->pelanggan_alamat,
                'pelanggan_hp' => $request->pelanggan_hp
            ]
        );
        return redirect('pelanggan')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->delete();

        return redirect('pelanggan')->with('success', 'Data berhasil dihapus');
    }
}
