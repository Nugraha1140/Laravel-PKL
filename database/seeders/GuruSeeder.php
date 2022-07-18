<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sam = [
            [
                'nama' => 'Maya Lisnawati',
                'alamat' => 'Mekar Wangi',
                'mapel' => 'Simulasi Digital',
                'pendidikan' => 'SMK',
                'umur' => '18 Tahun',
            ],
            [
                'nama' => 'M. Rizki Sofyan',
                'alamat' => 'Cibaduyut',
                'mapel' => 'Produktif RPL',
                'pendidikan' => 'S3',
                'umur' => '17 Tahun',
            ],
            [
                'nama' => 'Dinar Arya',
                'alamat' => 'TCI',
                'mapel' => 'Matematika',
                'pendidikan' => 'S2',
                'umur' => '17 Tahun',
            ],
            [
                'nama' => 'Hadad Hikmah',
                'alamat' => 'RancaManyar',
                'mapel' => 'PAI',
                'pendidikan' => 'SMA',
                'umur' => '19 Tahun',
            ],
            [
                'nama' => 'Alex Budiman',
                'alamat' => 'Sayati Univers',
                'mapel' => 'Ilmu Filsafat',
                'pendidikan' => 'SMK',
                'umur' => '16 Tahun',
            ],
        ];
        DB::table('gurus')->insert($sam);
    }
}
