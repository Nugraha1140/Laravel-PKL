<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(Barang::class);
        $this->call(Supplier::class);
        $this->call(Pembeli::class);
        $this->call(Pembayaran::class);
        $this->call(Transaksi::class);

    }
}
