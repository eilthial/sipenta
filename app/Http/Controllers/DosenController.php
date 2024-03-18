<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dosenController extends Controller
{
    public function all()
    {
        $dosen=[
            'Yori Adi Atma',
            'Andrew Kurniawan',
        ];
        return view('dosen')->with(['data' => $dosen]);
    }
}
