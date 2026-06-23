@extends('main')
@section('title', 'Edit prodi')
@section('content')
<div class="card card-primary m-2 p-3 ">
    <form action="{{ route('prodis.update', $prodi->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="nama_prodi" class="form-label">Nama Prodi</label>
            <div class="form-group">
                <input type="text" class="form-control @error('nama_prodi') is-invalid @enderror" id="nama_prodi" name="nama_prodi" value="{{ old('nama_prodi', $prodi->nama_prodi) }}">
            </div>
            @error('nama_prodi')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="singkatan" class="form-label">Singkatan</label>
            <div class="form-group">
                <input type="text" class="form-control @error('singkatan') is-invalid @enderror" id="singkatan" name="singkatan" value="{{ old('singkatan', $prodi->singkatan) }}">
            </div>
            @error('singkatan')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="Kaprodi" class="form-label">Kaprodi</label>
            <div class="form-group">
                <input type="text" class="form-control @error('Kaprodi') is-invalid @enderror" id="Kaprodi" name="Kaprodi" value="{{ old('Kaprodi', $prodi->Kaprodi) }}">
            </div>
            @error('Kaprodi')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="fakultas_id" class="form-label">Fakultas</label>
            <div class="form-group">
                <select class="form-control @error('fakultas_id') is-invalid @enderror" id="fakultas_id" name="fakultas_id">
                    <option value="">Pilih Fakultas</option>
                    @foreach ($fakultas as $row)
                        <option value="{{ $row->id }}" {{ old('fakultas_id', $prodi->fakultas_id) == $row->id ? 'selected' : '' }}>
                            {{ $row->nama_fakultas }} 
                        </option>
                    @endforeach
                </select>
            </div>
            @error('fakultas_id')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-warning mt-2">Update Data</button>
        <a href="{{ route('prodis.index') }}" class="btn btn-secondary mt-2">Batal</a>
    </form>
</div>
@endsection