@extends('layout.template')

@section('content')
    <h1>Data Prodi</h1>
    <ol>
        @foreach ($data as $prodi)
            <li>{{ $prodi }}</li>
        @endforeach
    </ol>
@endsection
