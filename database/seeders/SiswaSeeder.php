<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ex = [
            [
                'nama' => 'Dinar Arya Saputra',
                'alamat' => 'Kamp. Sukaluyu',
                'agama' => 'Islam',
                'sekolah' => 'SMK ASSALAAM BANDUNG',
                'umur' => '18 Tahun',
            ],
            [
                'nama' => 'Meiii',
                'alamat' => 'Cibaduyut',
                'agama' => 'Islam',
                'sekolah' => 'SMK ASSALAAM BANDUNG',
                'umur' => '17 Tahun',
            ],
            [
                'nama' => 'Ian Crud',
                'alamat' => 'TKI',
                'agama' => 'Islam',
                'sekolah' => 'SMK ASSALAAM BANDUNG',
                'umur' => '17 Tahun',
            ],
            [
                'nama' => 'King Hadad',
                'alamat' => 'RancaManyar',
                'agama' => 'Islam',
                'sekolah' => 'SMK ASSALAAM BANDUNG',
                'umur' => '19 Tahun',
            ],
            [
                'nama' => 'Lord Alex',
                'alamat' => 'Sayati Univers',
                'agama' => 'Islam',
                'sekolah' => 'SMK ASSALAAM BANDUNG',
                'umur' => '16 Tahun',
            ],
        ];
        DB::table('siswas')->insert($ex);
    }
}
