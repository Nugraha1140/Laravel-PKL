<?php

// menggunakan / menginput LatihanController
use App\Http\Controllers\LatihanController;
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
