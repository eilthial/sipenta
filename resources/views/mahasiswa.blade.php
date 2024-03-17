    @extends('layout.template')

    @section('content')
        <h1>Data Mahasiswa</h1>
        <ol>
            @foreach ($data as $mhs)
                <li>{{ $mhs }}</li>
            @endforeach
        </ol>
    @endsection
