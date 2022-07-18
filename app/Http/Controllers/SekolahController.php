<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Siswa;

// use App\Models\Jurusan;

class SekolahController extends Controller
{
    public function tampil()
    {

        $siswa = Siswa::all();
        return view('post.siswa', compact('siswa'));
    }
    public function tamp()
    {

        $guru = Guru::all();
        return view('post.guru', compact('guru'));
    }
     public function tamp()
    {

        $guru = Guru::all();
        return view('post.guru', compact('guru'));
    }
}
