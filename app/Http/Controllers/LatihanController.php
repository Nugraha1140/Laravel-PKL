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

                    ['nama' => 'NET TV', 'acara' => 'Ini Berita', 'jam' => '08.00', 'tanggal' => '10-07-2022'],
                    ['nama' => 'TRANS TV', 'acara' => 'On The Spot', 'jam' => '09.00', 'tanggal' => '11-07-2022'],
                    ['nama' => 'GLOBAL TV', 'acara' => 'Spongebob Squerpants', 'jam' => '07.00', 'tanggal' => '12-07-2022'],
                    ['nama' => 'TVRI', 'acara' => 'Warta Sunda', 'jam' => '10.00', 'tanggal' => '13-07-2022'],
                    ['nama' => 'INDOSIAR', 'acara' => 'Sinetron Azab', 'jam' => '09.30', 'tanggal' => '14-07-2022'],
                ],

            ],
        ];
        return view('pages.tv', ['tv' => $a]);
    }
    public function belanja()
    {
        $a = [
            [
                'nama' => 'Alfian',
                'belanja' => [

                    ['barang' => 'Sepatu', 'harga' => 250000],
                    ['barang' => 'Baju', 'harga' => 100000],
                    ['barang' => 'Celana', 'harga' => 150000],
                    ['barang' => 'Kupluk', 'harga' => 100000],
                ],

            ],
            [
                'nama' => 'Dida',
                'belanja' => [

                    ['barang' => 'Topi', 'harga' => 100000],
                    ['barang' => 'Baju', 'harga' => 75000],
                    ['barang' => 'Celana', 'harga' => 125000],
                ],

            ],

        ];
        return view('pages.belanja', ['belanja' => $a]);
    }
    public function rapot()
    {
        $a = [
            [
                'nama' => 'Agus',
                'jurusan' => 'TKR',
                'mapel' => [

                    ['pelajaran' => 'Bahasa Indonesia', 'nilai' => 80],
                    ['pelajaran' => 'Bahasa Inggris', 'nilai' => 97],
                    ['pelajaran' => 'Produktif', 'nilai' => 67],
                    ['pelajaran' => 'Matematika', 'nilai' => 100],
                ],

            ],
            [
                'nama' => 'Mahmud',
                'jurusan' => 'TKR',
                'mapel' => [

                    ['pelajaran' => 'Bahasa Indonesia', 'nilai' => 78],
                    ['pelajaran' => 'Bahasa Inggris', 'nilai' => 86],
                    ['pelajaran' => 'Produktif', 'nilai' => 90],
                    ['pelajaran' => 'Matematika', 'nilai' => 67],
                ],

            ],
            [
                'nama' => 'Rendi',
                'jurusan' => 'TSM',
                'mapel' => [

                    ['pelajaran' => 'Bahasa Indonesia', 'nilai' => 90],
                    ['pelajaran' => 'Bahasa Inggris', 'nilai' => 50],
                    ['pelajaran' => 'Produktif', 'nilai' => 65],
                    ['pelajaran' => 'Matematika', 'nilai' => 78],
                ],

            ],
            [
                'nama' => 'Firman',
                'jurusan' => 'RPL',
                'mapel' => [

                    ['pelajaran' => 'Bahasa Indonesia', 'nilai' => 78],
                    ['pelajaran' => 'Bahasa Inggris', 'nilai' => 90],
                    ['pelajaran' => 'Produktif', 'nilai' => 56],
                    ['pelajaran' => 'Matematika', 'nilai' => 78],
                ],

            ],
            [
                'nama' => 'Abdul',
                'jurusan' => 'RPL',
                'mapel' => [

                    ['pelajaran' => 'Bahasa Indonesia', 'nilai' => 89],
                    ['pelajaran' => 'Bahasa Inggris', 'nilai' => 67],
                    ['pelajaran' => 'Produktif', 'nilai' => 80],
                    ['pelajaran' => 'Matematika', 'nilai' => 90],
                ],

            ],

        ];
        return view('pages.rapot', ['rapot' => $a]);
    }
}
