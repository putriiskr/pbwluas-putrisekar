<?php

namespace App\Http\Controllers;

use App\Models\Jenisobat;
use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Obat::all();
        return view('obat.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obat.create',[
            'jenisobat' => Jenisobat::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Obat::create(
            [
                'obat_id_jenisobat' => $request->obat_id_jenisobat,
                'obat_nama' => $request->obat_nama,
                'obat_harga' => $request->obat_harga,
                'obat_stock' => $request->obat_stock
            ]
        );

        return redirect('obat')->with('success','Data berhasil ditambahkan');
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
        $row = Obat::findOrFail($id);
        return view('obat.edit', [
            'jenisobat' => Jenisobat::get()
        ],
        compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Obat::findOrFail($id);
        $row->update(
            [
                'obat_id_jenisobat' => $request->obat_id_jenisobat,
                'obat_nama' => $request->obat_nama,
                'obat_harga' => $request->obat_harga,
                'obat_stock' => $request->obat_stock
            ]
        );
        return redirect('obat')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Obat::findOrFail($id);
        $row->delete();

        return redirect('obat')->with('success', 'Data berhasil dihapus');
    }
}