<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $con = [
            [
                'kode_jurusan' => '1101A',
                'jurusan' => 'Rekayasa Perangkat Lunak',
            ],
            [
                'kode_jurusan' => '1101B',
                'jurusan' => 'Teknik Kendaraan Ringan Otomotif',
            ],
            [
                'kode_jurusan' => '1101C',
                'jurusan' => 'Teknik Sepeda Motor',
            ],
            [
                'kode_jurusan' => '1101E',
                'jurusan' => 'Tata Boga',
            ],
            [
                'kode_jurusan' => '1101F',
                'jurusan' => 'Multimedia',
            ],
        ];
        DB::table('jurusans')->insert($con);
    }
}
