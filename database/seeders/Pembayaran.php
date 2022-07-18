<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class Pembayaran extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $v = [
            [
                'tgl_bayar' => '11-12-2022',
                'total_bayar' => 3000000,
                'kode_transaksi' => 1101,

            ],
            [
                'tgl_bayar' => '11-12-2022',
                'total_bayar' => 5000000,
                'kode_transaksi' => 1102,

            ],
            [
                'tgl_bayar' => '11-12-2022',
                'total_bayar' => 4000000,
                'kode_transaksi' => 1101,

            ],
            [
                'tgl_bayar' => '11-12-2022',
                'total_bayar' => 2000000,
                'kode_transaksi' => 1103,

            ],
            [
                'tgl_bayar' => '11-12-2022',
                'total_bayar' => 12000000,
                'kode_transaksi' => 1104,

            ],
        ];
        DB::table('pembayarans')->insert($v);
    }
}
