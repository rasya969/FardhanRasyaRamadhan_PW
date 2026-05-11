@extends('main')
@section('title', 'Daftar Periode')
@section('content')
   <a href="{{route('periodes.create')}}" class="btn btn-primary mb-2">Tambah </a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Tahun Akademik</th>
            <th>Semester</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($periodes as $item)
            <tr>
                <td>{{$item->tahun_akademik}}</td>
                <td>{{$item->semester}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection