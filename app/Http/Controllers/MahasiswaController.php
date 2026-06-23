<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // akses tabel mahasiswa
        $mahasiswas = Mahasiswa::with('prodi')->get();
        return view('mahasiswa.index', compact('mahasiswas'));// kirim data ke view 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // akses tabel prodi untuk menampilkan data prodi di form create mahasiswa
        $prodis = Prodi::all();
        return view('mahasiswa.create', compact('prodis')); // kirim data ke view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi input
        $input = $request->validate([
            'npm' => 'required|unique:mahasiswas',
            'nama' => 'required',
            'prodi_id' => 'required|exists:prodis,id',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        //upload file
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nama_foto = time() . '_' . $foto->getClientOriginalName();
            $foto->storeAs('fotos', $nama_foto, 'public');
        } else {
            $nama_foto = null;
        }
        $input['foto'] = $nama_foto; // tambahkan nama foto ke input
        //simpan ke tabel mahasiswa
        Mahasiswa::create($input);
        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $prodis = Prodi::all();
        $mahasiswa = Mahasiswa::with('prodi')->findOrFail($mahasiswa->id); // ambil data mahasiswa beserta relasi prodi
        return view('mahasiswa.edit', compact('mahasiswa', 'prodis')); // kirim data ke view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
