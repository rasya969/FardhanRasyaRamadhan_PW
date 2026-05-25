@extends('main')

@section('title', 'Edit Mahasiswa')

@section('content')
    <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" class="form-control" value="{{ old('nama_mahasiswa', $mahasiswa->nama_mahasiswa) }}">
        </div>
        @error('nama_mahasiswa')
            <div class="text-danger"> {{ $message }} </div>
        @enderror

        <div class="form-group">
            <label for="">npm</label>
            <input type="text" name="npm" class="form-control" value="{{ old('npm', $mahasiswa->npm) }}">
        </div>
        @error('npm')
            <div class="text-danger"> {{ $message }} </div>
        @enderror
        
            <div class="form-group">
                <label for="">Foto</label>
                <input type="file" name="foto" class="form-control" value="{{ old('foto', $mahasiswa->foto) }}">
            </div>
            @error('foto')
                <div class="text-danger"> {{ $message }} </div>
            @enderror
            
             <div class="form-group">
                <label for="">prodi</label>
                <input type="text" name="prodi" class="form-control" value="{{ old('prodi', $mahasiswa->prodi) }}">
            </div>
            @error('prodi')
                <div class="text-danger"> {{ $message }} </div>
            @enderror
            


        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
        <a href="{{ route('mahasiswas.index') }}" class="btn btn-secondary mt-2">Batal</a>
    </form>
@endsection