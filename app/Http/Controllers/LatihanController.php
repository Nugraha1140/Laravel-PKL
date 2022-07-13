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
            array('id' => 1, 'name' => 'Dadang', 'age' => 15, 'hobi' => ['Mancing', 'Renang', 'futsal',
            ]),
            array('id' => 2, 'name' => 'Dadung', 'age' => 18, 'hobi' => ['Membaca', 'Bernyanyi',
            ]),
        ];
        return view('pages.siswa', ['siswa' => $a]);
    }
    public function kuli()
    {
        $a = [
            [
                'pengajar' => 'Yusuf',
                'matkul' => 'Pemrograman Web Mobile',
                'mahasiswa' => [

                    ['nama' => 'Muhammad Soleh', 'nilai' => 70],
                    ['nama' => 'Jujun Junaedi', 'nilai' => 80],
                    ['nama' => 'Mamat Alkatiri', 'nilai' => 90],
                ],

            ],
            [
                'pengajar' => 'Yaris Riyadi',
                'matkul' => 'Pemrograman Web',
                'mahasiswa' => [
                    ['nama' => 'Alfred', 'nilai' => 67],
                    ['nama' => 'Bruno Kasmir', 'nilai' => 90],
                ],
            ],

        ];
        return view('pages.kuli', ['kuli' => $a]);
    }
    public function tv()
    {
        $a = [
            [
                'stasiun' => [

                    ['nama' => 'NET TV', 'jam' => '08.00', 'tanggal' => '12-12-12'],
                    ['nama' => 'TRANS TV', 'jam' => '09.00', 'tanggal' => '11-11-11'],
                    ['nama' => 'GLOBAL TV', 'jam' => '07.00', 'tanggal' => '10-10-10'],
                ],

            ],
        ];
        return view('pages.tv', ['tv' => $a]);
    }
}
