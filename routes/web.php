<?php
use App\Http\Controllers\Produkcontroller;
use App\Http\Controllers\Jasacontroller;
use App\Http\Controllers\Artikelcontroller;
use App\Http\Controllers\Pesancontroller;
use App\Http\Controllers\Webcontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Transaksicontroller;
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

// Route::get('/', function () {
//     return view('web.v_web');
// });

Route::get('/',[Webcontroller::class, 'index'])->name('web');
Route::get('/pesanan',[Pesancontroller::class, 'pesanan_user'])->name('pesanan');
Route::get('/pesanan/delete/{id_pesanan}',[Pesancontroller::class, 'delete']);
Route::get('/konfirmasi/transaksi/{id_produk}',[Pesancontroller::class, 'konfirmasi']);
Route::get('/setujui/{id_pesan}',[Transaksicontroller::class, 'setujuikonfirmasi']);
Route::get('/batalkan/{id_pesan}',[Transaksicontroller::class, 'batalkankonfirmasi']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::livewire('/user','users.users')->layout('user.v_user')->name('user');
//-----------------------------------------------------------------------------
//pesan
Route::get('/pesan/detail/{id_produk}',[Produkcontroller::class, 'detailk']);
Route::post('/pesan/insert/{id_produk}',[Pesancontroller::class, 'insert']);
//-----------------------------------------------------------------------------
//produk
Route::get('/produk',[Produkcontroller::class, 'index'])->name('produk');
Route::get('/produk/detail/{id_produk}',[Produkcontroller::class, 'detail']);
Route::get('/pesan/detail/{id_produk}',[Produkcontroller::class, 'detailk']);
Route::get('/produk/add',[Produkcontroller::class, 'add']);
Route::get('/produk/search',[Produkcontroller::class, 'search']);
Route::post('/produk/insert',[Produkcontroller::class, 'insert']);
Route::get('/produk/edit/{id_produk}',[Produkcontroller::class, 'edit']);
Route::post('/produk/update/{id_produk}',[Produkcontroller::class, 'update']);
Route::get('/produk/delete/{id_produk}',[Produkcontroller::class, 'delete']);
//-----------------------------------------------------------------------------
//jasa
Route::get('/jasa',[Jasacontroller::class, 'index'])->name('jasa');
Route::get('/jasa/detail/{id_jasa}',[Jasacontroller::class, 'detail']);
Route::get('/jasa/add',[Jasacontroller::class, 'add']);
Route::get('/jasa/search',[Jasacontroller::class, 'search']);
Route::post('/jasa/insert',[Jasacontroller::class, 'insert']);
Route::get('/jasa/edit/{id_jasa}',[Jasacontroller::class, 'edit']);
Route::post('/jasa/update/{id_jasa}',[Jasacontroller::class, 'update']);
Route::get('/jasa/delete/{id_jasa}',[Jasacontroller::class, 'delete']);
//-----------------------------------------------------------------------------
//artikel
Route::get('/artikel',[Artikelcontroller::class, 'index'])->name('artikel');
Route::get('/artikel/detail/{id_artikel}',[Artikelcontroller::class, 'detail']);
Route::get('/artikel/baca/{id_artikel}',[Artikelcontroller::class, 'detailk']);
Route::get('/artikel/add',[Artikelcontroller::class, 'add']);
Route::get('/artikel/search',[Artikelcontroller::class, 'search']);
Route::post('/artikel/insert',[Artikelcontroller::class, 'insert']);
Route::get('/artikel/edit/{id_artikel}',[Artikelcontroller::class, 'edit']);
Route::post('/artikel/update/{id_artikel}',[Artikelcontroller::class, 'update']);
Route::get('/artikel/delete/{id_artikel}',[Artikelcontroller::class, 'delete']);
//-----------------------------------------------------------------------------
//transaksi
Route::get('/transaksi',[Transaksicontroller::class, 'index'])->name('transaksi');
Route::get('/riwayattransaksi',[Transaksicontroller::class, 'datatransaksi'])->name('riwayattransaksi');
Route::get('/konfirmasi',[Transaksicontroller::class, 'konfirmasi'])->name('konfirmasi');
Route::get('/transaksi/cetak/{id_transaksi}',[Transaksicontroller::class, 'cetak']);
Route::get('/konfirmasi/cetak/{id_pesan}',[Transaksicontroller::class, 'cetakadmin']);
Route::get('/laporan/cetak/',[Transaksicontroller::class, 'laporan']);
Route::get('/laporan/keuangan',[Transaksicontroller::class, 'cetaklaporan']);
Route::get('/transaksi/pdf/{id_transaksi}',[Transaksicontroller::class, 'cetakpdf']);
Route::get('/transaksi/detail/{id_transaksi}',[Transaksicontroller::class, 'detail']);
Route::get('/konfirmasi/detail/{id_pesan}',[Transaksicontroller::class, 'detailkk']);
Route::get('/transaksi/add',[Transaksicontroller::class, 'add']);
Route::get('/transaksi/search',[Transaksicontroller::class, 'search']);
Route::post('/transaksi/insert',[Transaksicontroller::class, 'insert']);
Route::get('/transaksi/edit/{id_transaksi}',[Transaksicontroller::class, 'edit']);
Route::post('/transaksi/update/{id_transaksi}',[Transaksicontroller::class, 'update']);
Route::get('/transaksi/delete/{id_transaksi}',[Transaksicontroller::class, 'delete']);
//-----------------------------------------------------------------------------

Route::get('/user',[Usercontroller::class, 'index'])->name('user');
Route::get('/admin',[Admincontroller::class, 'index'])->name('admin');

// Route::group(['middleware' => 'user'], function() [

// ]);

// Route::group(['middleware' => 'admin'], function() [

// ]);
