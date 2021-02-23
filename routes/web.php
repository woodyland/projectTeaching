<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/rumah', function () {
    return view('rumah');
});


Route::get('/mahasiswa/{namaMahasiswa?}', function ($namaMahasiswa) {
    return view('mahasiswa', ['namaMahasiswa' =>  $namaMahasiswa]);
});

Route::view('/admin','admin.viewEdit');

Route::view('/dosen','admin.dosen.viewDatadosen', [
    'nama' => 'tomi tri sujaka',
    'alamat' => 'narmada'

]);
