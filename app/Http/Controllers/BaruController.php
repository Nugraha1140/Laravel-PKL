<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pembayaran;
use App\Models\Pembeli;
use App\Models\Supplier;
use App\Models\Transaksi;

// use Illuminate\Http\Request;

class BaruController extends Controller
{
    public function a()
    {

        $barang = Barang::all();
        $supplier = Supplier::all();
        $pembeli = Pembeli::all();
        $pembayaran = Pembayaran::all();
        $transaksi = Transaksi::all();

        return view('post.latihan', compact('barang', 'supplier', 'pembeli', 'pembayaran', 'transaksi'));
    }
}
