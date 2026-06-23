@extends('main')

@section('title', 'Tambah Periode')

@section('content')
<form action="{{route('periodes.update', $periode->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="tahun_akademik" class="form-label">Tahun Akademik</label>
        <div class="form group" value="{{old('tahun_akademik')}}">
            <input type="text" class="form-control" id="tahun_akademik" name="tahun_akademik" value="{{ old('tahun_akademik', $periode->tahun_akademik) }}">
        </div>
    </div>

    @error('tahun_akademik')
    <div class="text-danger">{{ $message }}</div>
        
    @enderror
    <div class="mb-3">
        <label for="semester" class="form-label">Semester</label>
        <div class="form group" value="{{old('semester')}}">
            <input type="text" class="form-control" id="semester" name="semester" value="{{ old('semester', $periode->semester) }}">
        </div>
    </div>
     
     @error('semester')
    <div class="text-danger">{{ $message }}</div>
        
    @enderror
    <button type="submit" class="btn btn-warning mt-2">Update Data</button>
        <a href="{{ route('periodes.index') }}" class="btn btn-secondary mt-2">Batal</a>
</form>
@endsection