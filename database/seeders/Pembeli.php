<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class Pembeli extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $x = [
            [
                'nama_pembeli' => 'Jhon Kennedy',
                'jk' => 'Laki-Laki',
                'no_telpon' => 87123487,
                'alamat' => 'West Java',
            ],
            [
                'nama_pembeli' => 'ALex Tony',
                'jk' => 'Laki-Laki',
                'no_telpon' => 98657773,
                'alamat' => 'East Sumatra',
            ],
            [
                'nama_pembeli' => 'Jack Ricard',
                'jk' => 'Laki-Laki',
                'no_telpon' => 897634444,
                'alamat' => 'New Zealand',
            ],
            [
                'nama_pembeli' => 'Tendo ',
                'jk' => 'Perempuan',
                'no_telpon' => 653433222,
                'alamat' => 'New Work',
            ],
            [
                'nama_pembeli' => 'Kendall ',
                'jk' => 'Perempuan',
                'no_telpon' => 987673242,
                'alamat' => 'Afganistan',
            ],
        ];
        DB::table('pembelis')->insert($x);
    }
}
