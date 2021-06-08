<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class Pesananmodel extends Model
{
    public function allData(){
    	return DB::table('pesan_detail')
        ->leftJoin('produk','produk.id_produk','=','pesan.id_produk')
        ->leftJoin('pesan','pesan.id_pesan','=','pesan.id_pesan')
        ->paginate(5);
    }

    public function allDatas(){
        return DB::table('pesan_detail')
        ->leftJoin('produk','produk.id_produk','=','pesan_detail.id_produk')
        ->get();
    }

    public function laporan($tgl_awal, $tgl_akhir){
        return DB::table('pesan_detail')->where('tanggal','>=',$tgl_awal)->where('tanggal','<=',$tgl_akhir)
        ->leftJoin('produk','produk.id_produk','=','pesan_detail.id_produk')
        ->get();
    }

    public function cek_data($id_produk, $pesananid){
        return DB::table('pesan_detail')->where('id_produk', $id_produk)->where('id_pesan', $pesananid->id_pesan)->first();
    }

    public function baru(){
        return DB::table('pesan')->where('id_user', Auth::user()->id)->where('status',0)->first();
    }

    public function lama(){
        return DB::table('pesan')->where('id_user', Auth::user()->id)->where('status',1)->get();
    }

    public function user_data(){
        return DB::table('pesan')->where('id_user', Auth::user()->id)->where('status',1)->count();
    }

    public function lamak($pesanid){
        return DB::table('pesan')->where('id_user', Auth::user()->id)->where('status',1)->where('id_pesan', $pesanid)->first();
    }

    public function lamakk($id_pesan){
        return DB::table('pesan')->where('id_pesan', $id_pesan)->first();
    }

    public function pesanancek($id_pesanan){
        return DB::table('pesan_detail')->where('id_pesanan', $id_pesanan)->first();
    }

    public function pesancek($id_pesan){
        return DB::table('pesan')->where('id_pesan', $id_pesan)->first();
    }


    public function notif($pesanid){
        return DB::table('pesan_detail')->where('id_pesan', $pesanid)->count();
    }

    public function cek_produk($pesanid){
        return DB::table('pesan_detail')->where('id_pesan', $pesanid)
        ->leftJoin('produk','produk.id_produk','=','pesan_detail.id_produk')
        ->get();
    }

    public function cek_produks($pesanid){
        return DB::table('pesan_detail')->where('id_pesan', $pesanid)
        ->leftJoin('produk','produk.id_produk','=','pesan_detail.id_produk')
        ->first();
    }

    public function allDatak($id_pesanan){
        return DB::table('pesan_detail')->where('id_pesanan', $id_pesanan)->get();
    }

    public function Search($cari){
        return DB::table('pesan_detail')
        ->where('id_produk','LIKE',"%".$cari."%")
        ->paginate();
    }

    public function detailData($id_pesanan){
    	return DB::table('pesan_detail')->where('id_pesanan', $id_pesanan)
        ->leftJoin('produk','produk.id_produk','=','pesan.id_produk')
        ->leftJoin('pesan','pesan.id_pesan','=','pesan.id_pesan')
        ->first();
    }

    public function addData($datas){
    	return DB::table('pesan_detail')
        ->insert($datas);
    }

    public function editDatas($id_pesanan, $datas){
    	DB::table('pesan_detail')
    	->where('id_pesanan', $id_pesanan)
    	->update($datas);
    }

    public function editData($id_produk, $datas){
        DB::table('produk')
        ->where('id_produk', $id_produk)
        ->update($datas);
    }


    public function deleteData($id_pesanan){
    	DB::table('pesan_detail')
    	->where('id_pesanan', $id_pesanan)
    	->delete();
    }

}
