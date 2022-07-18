<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class Barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $o = [
            [
                'nama_barang' => 'Mouse Lucitic',
                'harga' => 300000,
                'stok' => 120,
                'nama_supplier' => 'Eshan Enterprise',
            ],
            [
                'nama_barang' => 'Mechanical Keyboard',
                'harga' => 500000,
                'stok' => 78,
                'nama_supplier' => 'Dinar Gaming',
            ],
            [
                'nama_barang' => 'PlayStation 5',
                'harga' => 12000000,
                'stok' => 50,
                'nama_supplier' => 'Playstation Industries',
            ],
            [
                'nama_barang' => 'Tendo',
                'harga' => 100000,
                'stok' => 500,
                'nama_supplier' => 'Nintendo',
            ],
            [
                'nama_barang' => 'Flash Disk',
                'harga' => 120000,
                'stok' => 1200,
                'nama_supplier' => 'Sandisk',
            ],
        ];
        DB::table('barangs')->insert($o);
    }
}
