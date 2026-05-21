<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periodes = Periode::all();
        return view('periodes.index', compact('periodes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('periodes.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'tahun_akademik' => 'required|string|max:255',
            'semester' => 'required|string|max:10',
        ]);
        //simpan ke tabel periode
        Periode::create($input);

        //redirect ke halaman periodes.index
        return redirect()->route('periodes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periode $periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periode $periode)
    {
       $periode = Periode::find($periode->id); // cari data berdasarkan id
        //dd($fakultas);
        return view('periodes.edit', compact('periode')); // kirim data ke view

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periode $periode)
    {
        $input = $request->validate([
            'tahun_akademik' => 'required|string|max:255',
            'semester' => 'required|string|max:10',
        ]);

        $periode->update($input);
        return redirect()->route('periodes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periode $periode)
    {
        $periode->delete();
        return redirect()->route('periodes.index');
    }
}
