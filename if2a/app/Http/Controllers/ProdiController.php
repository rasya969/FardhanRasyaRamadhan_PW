<?php

namespace App\Http\Controllers;

use App\Models\fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis = Prodi::with('fakultas')->get();
        return view('prodis.index', compact('prodis'));
    }

    /**
     * Show the form for creating a new resource 
     */
    public function create()
    {
        $fakultas = fakultas::all();
        return view('prodis.create', compact('fakultas'));
    } 

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'nama_prodi' => 'required|unique:prodis',
            'singkatan' => 'required',
            'Kaprodi' => 'required',
            'fakultas_id' => 'required'
        ]);
        //simpan ke tabel periode
        Prodi::create($input);

        //redirect ke halaman periodes.index
        return redirect()->route('prodis.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        $fakultas = fakultas::all();
        return view('prodis.edit', compact('prodi', 'fakultas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        $input = $request->validate([
            'nama_prodi' => 'required|unique:prodis,nama_prodi,' . $prodi->id,
            'singkatan' => 'required',
            'Kaprodi' => 'required',
            'fakultas_id' => 'required'
        ]);

        $prodi->update($input);
        return redirect()->route('prodis.index');
        


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();
        return redirect()->route('prodis.index');


    }
}
