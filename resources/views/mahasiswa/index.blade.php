@extends('main')

@section('title', 'mahasiswa')

@section('content')
    <a href="{{ route('mahasiswas.create')}}" class="btn btn-primary">Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>foto</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($mahasiswas as $key => $mhs)
                <tr>
                    <td> {{ $mhs->nama }} </td>
                    <td> {{ $mhs->npm }} </td>
                    <td>
                        @if ($mhs->foto)
                            <img src="{{ asset('storage/fotos/' . $mhs->foto) }}" alt="Foto Mahasiswa" width="100">
                        @else
                            <p>foto tidak tersedia</p>
                        @endif
                    </td>
                    <td> {{ $mhs->prodi->nama_prodi }} </td>
                    <td>
                        <a href="{{route('mahasiswas.edit', $mhs->id)}}" class="btn btn-xs btn-warning btn-rounded" >Edit</a>
                        <form method="POST" action="{{ route('mahasiswas.destroy', $mhs->id) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                                data-toggle="tooltip" title='Delete'
                                data-nama='{{ $mhs->nama }}'>Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection