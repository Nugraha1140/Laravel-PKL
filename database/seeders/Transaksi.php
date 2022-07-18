<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class Transaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $k = [
            [
                'nama_barang' => 'Mouse Lucitik',
                'nama_pembeli' => 'Al Khawarizmi',
                'tgl_bayar' => '10-07-2022',
                'keterangan' => 'Sukses',
            ],
            [
                'nama_barang' => 'Keyboard Mechanical',
                'nama_pembeli' => 'Rahman',
                'tgl_bayar' => '12-08-2010',
                'keterangan' => 'Gagal',
            ],
            [
                'nama_barang' => 'Monitor',
                'nama_pembeli' => 'Ajiz',
                'tgl_bayar' => '10-10-2021',
                'keterangan' => 'Sukses',
            ],
            [
                'nama_barang' => 'Tv',
                'nama_pembeli' => 'Salman',
                'tgl_bayar' => '18-07-2022',
                'keterangan' => 'Sukses',
            ],
            [
                'nama_barang' => 'PC',
                'nama_pembeli' => 'Alkamil',
                'tgl_bayar' => '12-12-2022',
                'keterangan' => 'Sukses',
            ],
        ];
        DB::table('transaksis')->insert($k);
    }
}
