<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class Supplier extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = [
            [
                'nama_supplier' => 'Al Kamil Family',
                'no_telpon' => 183208297,
                'alamat' => 'Mesir',
            ],
            [
                'nama_supplier' => 'Al Furqan Enterprise',
                'no_telpon' => 108212986,
                'alamat' => 'Timur Tengah',
            ],
            [
                'nama_supplier' => 'Gordon City',
                'no_telpon' => 108978766,
                'alamat' => 'Amerika Serikat',
            ],
            [
                'nama_supplier' => 'Fernandes Grup',
                'no_telpon' => 10897876,
                'alamat' => 'Amerika Serikat',
            ],
            [
                'nama_supplier' => 'King Salman',
                'no_telpon' => 10897877,
                'alamat' => 'Amerika Serikat',
            ],
        ];
        DB::table('suppliers')->insert($p);
    }
}
