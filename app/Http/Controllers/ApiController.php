<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class ApiController extends Controller
{
    public function showAll()
    {
        // return response()->json(Mahasiswa::all(), 200);
        return response()->json(Mahasiswa::all(), 200)->withHeaders([
            'Nim' => 'nim',
            'Email' => 'email',
            'Nama' => 'name',
        ]);
    }
    public function showMahasiswa1()
    {
        return response()->json(Mahasiswa::find(1), 200);
    }
    public function showMahasiswa2()
    {
        return response()->json(Mahasiswa::find(2), 200);
    }
    public function showMahasiswa3()
    {
        return response()->json(Mahasiswa::find(3), 200);
    }
    public function countMahasiswa()
    {
        return response()->json(Mahasiswa::count());
    }
}
