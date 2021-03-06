<?php

// menggunakan / menginput LatihanController
use App\Http\Controllers\BaruController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SekolahController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

// Route basic
Route::get('/about', function () {
    return view('about');
});

Route::get('profil/{nama}', function ($nama) {
    // $nama= "Nugraha A";
    return view('pages.profil', compact('nama'));
});

Route::get('/biodata', function () {
    $nama = "Nugraha A";
    $kelas = "XII RPL 3";
    $agama = "Islam";
    $alamat = "Cicaheum";
    $status = "Pelajar";
    return view('pages.biodata', compact(
        'nama',
        'kelas',
        'agama',
        'alamat',
        'status'
    ));
});

// Route Parameter
Route::get('pesan/{makan}/{minum}/{harga}', function ($makan, $minum, $harga) {
    return view('pages.pesan', compact(
        'makan',
        'minum',
        'harga'
    ));
});

// Route Opsional Parameter
Route::get('order/{menu?}', function ($a = "-") {
    return view('pages.order', compact('a'));
});

Route::get('pemesanan/{makanan?}/{minuman?}/{cemilan?}', function ($a = "Silahkan Pesan", $b = null, $c = null) {
    return view('pages.pemesanan', compact(
        'a',
        'b',
        'c'
    ));
});

route::get('latihan/{nama?}/{alamat?}/{umur?}', [LatihanController::class, 'perkenalan']);

route::get('skull/', [LatihanController::class, 'siswa']);

route::get('kuli/', [LatihanController::class, 'kuli']);
route::get('tv/', [LatihanController::class, 'tv']);
route::get('belanja/', [LatihanController::class, 'belanja']);
route::get('rapot/', [LatihanController::class, 'rapot']);

// route post
route::get('post/', [PostController::class, 'tampil']);
route::get('post/{id}', [PostController::class, 'search']);
route::get('post/judul/{title}', [PostController::class, 'search_title']);
route::get('post/edit/{id}/{title}/{content}', [PostController::class, 'edit']);
route::get('post/tambah/{title}/{content}', [PostController::class, 'tambah']);
route::get('post/delete/{id}', [PostController::class, 'hapus']);

// route sekolah
route::get('siswa/', [SekolahController::class, 'tampil']);
route::get('guru/', [SekolahController::class, 'tamp']);
route::get('jurusan/', [SekolahController::class, 'tam']);

// route baru
route::get('barang/supplier/pembeli/pembayaran/transaksi', [BaruController::class, 'a']);
// route::get('supplier/', [BaruController::class, 'b']);
