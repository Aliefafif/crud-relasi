<?php

use Illuminate\Support\Facades\Route;
use App\Models\barang;
use App\Models\pendaftaran;
use App\Http\Controllers\PostController;
use App\Http\Controllers\pendaftaranController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/about', function () {
    return'ini halaman about';
});

Route::get('/kontak', function () {
    return 'ini halaman kontak';
});

Route::get('/biodata', function () {
    return "Nama Depan    :Asep"."<br>".
           "Nama Belakang :Ranjang"."<br>".
           "Tanggal Lahir :12-02-27"."<br>".
           "Jenis Kelamin :laki-laki"."<br>".
           "Agama         :islam"."<br>".
           "Alamat        :baleendah"."<br>".
           "Telepon       :08122207163436"."<br>";
});

Route::get('/biodata2/{depan}/{belakang}/{tgl}/{jenis}/{agama}/{alamat}/{telepon}',
    function ($depan,$belakang,$tgl,$jenis,$agama,$alamat,$telepon) {
    return "Nama Depan    :$depan"."<br>".
           "Nama Belakang :$belakang"."<br>".
           "Tanggal Lahir :$tgl"."<br>".
           "Jenis Kelamin :$jenis"."<br>".
           "Agama         :$agama"."<br>".
           "Alamat        :$alamat"."<br>".
           "Telepon       :$telepon"."<br>";
});

Route::get('/aritmatika/{bilangan1}/{bilangan2}', function ($bilangan1, $bilangan2) {
    $jumlah1 = $bilangan1 + $bilangan2;
    $jumlah2 = $bilangan1 - $bilangan2;
    $jumlah3 = $bilangan1 * $bilangan2;
    $jumlah4 = $bilangan1 / $bilangan2;

    return "Bilangan 1 = $bilangan1<br>" .
           "Bilangan 2 = $bilangan2<br>" .
           "Penjumlahan = $jumlah1<br>" .
           "Pengurangan = $jumlah2<br>" .
           "Perkalian = $jumlah3<br>" .
           "Pembagian = $jumlah4<br>";
});

Route::get('murid', function () {

     $data_murid = ["dio","kenan","momy","reza auditor","mursid"];

     $data_kelas = ["XI RPL 1","XI RPL 2","XI RPL 3"];

    return view('halaman_murid',compact('data_murid','data_kelas'));
});

Route::get('posts',[PostController::class, 'menampilkan']);


Route::get('barang', function () {

    $barangs = barang::all();

   return view('barang',compact('barangs'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('pendaftaran',pendaftaranController::class);

Route::resource('Registrasi',RegistrasiController::class);

Route::resource('Buku',BukuController::class);

Route::resource('Pengguna',PenggunaController::class);

Route::resource('telepon',TeleponController::class);

Route::resource('kategori',kategoriController::class);

Route::resource('produk',ProdukController::class);

Route::resource('pembeli',PembeliController::class);

Route::resource('obat',ObatController::class);

Route::resource('transaksi',TransaksiController::class);