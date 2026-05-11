@extends('main')

@section('title', 'fakultas')
    
@section('content')
@foreach ($result as $item)
    {{$item->nama_fakultas}} - {{$item->singkatan}} <br>
@endforeach

@endsection