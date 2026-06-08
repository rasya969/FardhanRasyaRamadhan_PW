@extends('main')



@section('title', 'Tambah Periode')

@section('content')
<form action="{{route('periodes.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="tahun_akademik" class="form-label">Tahun Akademik</label>
        <div class="form group" value="{{old('tahun_akademik')}}">
            <input type="text" class="form-control" id="tahun_akademik" name="tahun_akademik">
        </div>
    </div>

    @error('tahun_akademik')
    <div class="text-danger">{{ $message }}</div>
        
    @enderror
    <div class="mb-3">
        <label for="semester" class="form-label">Semester</label>
        <div class="form group" value="{{old('semester')}}">
            <input type="text" class="form-control" id="semester" name="semester">
        </div>
    </div>
     
     @error('semester')
    <div class="text-danger">{{ $message }}</div>
        
    @enderror
    <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
@endsection