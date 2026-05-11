@extends('main')



@section('title', 'Tambah fakultas')

@section('content')
<form action="{{route('fakultas.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama_fakultas" class="form-label">Nama Fakultas</label>
        <div class="form group" value="{{old('nama_fakultas')}}">
            <input type="text" class="form-control" id="nama_fakultas" name="nama_fakultas">
        </div>
    </div>

    @error('nama_fakultas')
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
    <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
@endsection