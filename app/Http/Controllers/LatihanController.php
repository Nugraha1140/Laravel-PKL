<?php

namespace App\Http\Controllers;

class LatihanController extends Controller
{
    public function perkenalan($nama, $alamat, $umur)
    {
        // $nama = "Nugraha";
        // $alamat = "Bandung";
        // $umur = 17;

        return view('pages.perkenalan', compact('nama', 'alamat', 'umur'));
    }
    public function siswa()
    {
        $a = [
            array('id' => 1, 'name' => 'Dadang', 'age' => 15),
            array('id' => 2, 'name' => 'Dadung', 'age' => 13),
        ];
        return view('pages.siswa', ['siswa' => $a]);
    }
}
