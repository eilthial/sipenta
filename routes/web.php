<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('pages.dashboard',['mhs1'=>'Ahmad']);
// });

// Route::get('/', function () {
//     $mahasiswa= [
//         'mhs1' => 'Riko',
//         'mhs2' => 'Santi',
//         'mhs3' => 'Elon Musk',
//         'mhs4' => 'Bill Gates',
//     ];
//     return view('pages.dashboard',['data'=> $mahasiswa]);
// });


// Route::get('/', function () {
//     $mahasiswa= [
//         'mhs1' => 'Riko',
//         'mhs2' => 'Santi',
//         'mhs3' => 'Elon Musk',
//         'mhs4' => 'Bill Gates',
//     ];
//     return view('pages.dashboard')->with(['data' => $mahasiswa]);
// });

//dengan compact
// Route::get('/', function () {
//     $mahasiswa= [
//         'mhs1' => 'Riko',
//         'mhs2' => 'Santi',
//         'mhs3' => 'Elon Musk',
//         'mhs4' => 'Bill Gates',
//     ];
//     return view('pages.dashboard',compact('mahasiswa'));
// });

//dengan with compact
// Route::get('/', function () {
//     $mahasiswa= [
//         'mhs1' => 'Riko',
//         'mhs2' => 'Santi',
//         'mhs3' => 'Elon Musk',
//         'mhs4' => 'Bill Gates',
//     ];
//     return view('pages.dashboard')->with (compact('mahasiswa'));
// });

Route::get('/test', function () {
    return view('test');
});

Route::get('/student/mahasiswa', function () {
    return "ini halaman student";
});

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    $mahasiswa= [
        'mhs1' => 'Riko',
        'mhs2' => 'Santi',
        'mhs3' => 'Elon Musk',
        'mhs4' => 'Bill Gates',
    ];
    return view('pages.dashboard2')->with (compact('mahasiswa'));
});

//Route utama
Route::get('/', function () {
    return view('login');
});

Route::get('/mahasiswa', function () {
    $mahasiswa=[
        'Elon Musk',
        'Billl gates',
        'Jackie',
        'Ariana'
    ];
    return view('mahasiswa')->with(['data' => $mahasiswa]);
});
