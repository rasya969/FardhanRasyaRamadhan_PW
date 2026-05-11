@extends('main')

@section('title', 'fakultas')
    
@section('content')

<a href="{{route('fakultas.create')}}" class="btn btn-primary">Tambah </a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Singkatan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($result as $item)
            <tr>
                <td>{{$item->nama_fakultas}}</td>
                <td>{{$item->singkatan}}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection