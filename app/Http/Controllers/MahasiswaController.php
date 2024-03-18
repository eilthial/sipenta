<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa=[
            'Elon Musk',
            'Billl gates',
            'Jackie',
            'Ariana'
        ];
        return view('mahasiswa')->with(['data' => $mahasiswa]);
    }

    public function prodi()
    {
        $prodi=[
            'Manajemen Informatika',
            'Teknik Komputer',
            'Teknologi Rekayasa Perangkat Lunak',
            'Animasi'
        ];
        return view('prodi')->with(['data' => $prodi]);
    }
}
