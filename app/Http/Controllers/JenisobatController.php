<?php

namespace App\Http\Controllers;

use App\Models\Jenisobat;
use Illuminate\Http\Request;

class JenisobatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Jenisobat::all();
        return view('jenisobat.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenisobat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Jenisobat::create(
            [
                'jenisobat_nama' => $request->jenisobat_nama
            ]
        );

        return redirect('jenisobat')->with('success','Data berhasil ditambahkan');
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
        $row = Jenisobat::findOrFail($id);
        return view('jenisobat.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Jenisobat::findOrFail($id);
        $row->update(
            [
                'jenisobat_nama' => $request->jenisobat_nama
            ]
        );
        return redirect('jenisobat')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Jenisobat::findOrFail($id);
        $row->delete();

        return redirect('jenisobat')->with('success', 'Data berhasil dihapus');
    }
}