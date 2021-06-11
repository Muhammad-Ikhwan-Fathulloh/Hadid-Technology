<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class Pesanmodel extends Model
{
    public function allData(){
    	return DB::table('pesan')
        ->leftJoin('produk','produk.id_produk','=','pesan.id_produk')
        ->leftJoin('users','users.id','=','pesan.id')
        ->paginate(5);
    }
    
    public function jumlahuser(){
        return DB::table('users')->count();
    }

    public function allDatas(){
        return DB::table('pesan')
        ->where('status',1)
        ->leftJoin('users','users.id','=','pesan.id_user')
        ->get();
    }

    public function allDatak($id_pesan){
        return DB::table('pesan')->where('id_pesan', $id_pesan)->get();
    }

    public function jumlah_data(){
        return DB::table('pesan_detail')->count();
    }

    public function belumkonfirmasi(){
        return DB::table('pesan')->where('status',1)->where('konfirmasi',0)->count();
    }

    public function sudahkonfirmasi(){
        return DB::table('pesan')->where('status',1)->where('konfirmasi',1)->count();
    }

    public function belumkonfirmasiuser(){
        return DB::table('pesan')->where('id_user', Auth::user()->id)->where('status',1)->where('konfirmasi',0)->count();
    }

    public function sudahkonfirmasiuser(){
        return DB::table('pesan')->where('id_user', Auth::user()->id)->where('status',1)->where('konfirmasi',1)->count();
    }


    public function Search($cari){
        return DB::table('pesan')
        ->where('id_user','LIKE',"%".$cari."%")
        ->paginate();
    }

    public function detailData($id_pesan){
    	return DB::table('pesan')->where('id_pesan', $id_pesan)
        ->leftJoin('produk','produk.id_produk','=','pesan.id_produk')
        ->leftJoin('users','users.id','=','pesan.id')
        ->first();
    }

    public function addData($data){
    	return DB::table('pesan')
        ->insert($data);
    }

    public function editData($id_pesan, $data){
    	DB::table('pesan')
    	->where('id_pesan', $id_pesan)
    	->update($data);
    }

    public function deleteData($id_pesan){
    	DB::table('pesan')
    	->where('id_pesan', $id_pesan)
    	->delete();
    }

}
