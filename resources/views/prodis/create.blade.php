@extends('main')

@section('title', 'Tambah prodi')

@section('content')
<form action="{{route('prodis.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama_prodi" class="form-label">Nama Prodi</label>
        <div class="form group" value="{{old('nama_prodi')}}">
            <input type="text" class="form-control" id="nama_prodi" name="nama_prodi">
        </div>
    </div>

    @error('nama_prodi')
    <div class="text-danger">{{ $message }}</div>
        
    @enderror
    <div class="mb-3">
        <label for="singkatan" class="form-label">Singkatan</label>
        <div class="form group" value="{{old('singkatan')}}">
            <input type="text" class="form-control" id="singkatan" name="singkatan">
        </div>
    </div>
    @error('singkatan')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label for="Kaprodi" class="form-label">Kaprodi</label>
        <div class="form group" value="{{old('Kaprodi')}}">
            <input type="text" class="form-control" id="Kaprodi" name="Kaprodi">
        </div>
    @error('Kaprodi')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label for="fakultas_id" class="form-label">Fakultas</label>
        <div class="form group">
            <select class="form-control" id="fakultas_id" name="fakultas_id">
                <option value="">Pilih Fakultas</option>
                @foreach ($fakultas as $row )
                    <option value="{{ $row->id }}" {{ old('fakultas_id') == $row->id ? 'selected' : '' }}>
                        {{ $row->nama_fakultas }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    @error('fakultas_id')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
@endsection