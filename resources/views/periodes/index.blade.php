@extends('main')
@section('title', 'Daftar Periode')
@section('content')
   <a href="{{route('periodes.create')}}" class="btn btn-primary mb-2">Tambah </a>

<table class="table table-sm">
    <thead>
        <tr>
            <th>Tahun Akademik</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($periodes as $item)
            <tr>
                <td>{{$item->tahun_akademik}}</td>
                <td>{{$item->semester}}</td>
                <td>
                    <form method="POST" action="{{ route('periodes.destroy', $item->id) }} " class="d-inline">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                        data-toggle="tooltip" title='Delete'
                        data-nama='{{ $item->nama_periode }}'>Hapus</button>
                    </form>
                    <a href="{{ route('periodes.edit', $item->id) }}" class="btn btn-xs btn-warning btn-rounded">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection