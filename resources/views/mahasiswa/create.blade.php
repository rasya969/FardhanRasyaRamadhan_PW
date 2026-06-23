@extends('main')

@section('title', 'Tambah Mahasiswa')

@section('content')
    <form action="{{ route('mahasiswas.store') }}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
        </div>
        @error('nama')
            <div class="text-danger"> {{ $message }} </div>
        @enderror

        <div class="form-group">
            <label for="">NPM</label>
            <input type="text" name="npm" class="form-control" value="{{ old('npm') }}">
        </div>
        @error('npm')
            <div class="text-danger"> {{ $message }} </div>
        @enderror
        <div class="form-group">
            <label for="">Prodi</label>
            <select name="prodi_id" class="form-control">
                <option value="">Pilih Prodi</option>
                @foreach ($prodis as $prodi)
                    <option value="{{ $prodi->id }}" {{ old('prodi_id') == $prodi->id ? 'selected' : '' }}>
                        {{ $prodi->nama_prodi }}
                    </option>
                @endforeach
            </select>
        </div>
        @error('prodi_id')
            <div class="text-danger"> {{ $message }} </div>
        @enderror
        

        <div class="form-group">
            <label for="">foto</label>
            <input type="file" name="foto" class="form-control" value="{{ old('foto') }}">
        </div>
        @error('foto')
            <div class="text-danger"> {{ $message }} </div>
        @enderror
        

        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>
@endsection