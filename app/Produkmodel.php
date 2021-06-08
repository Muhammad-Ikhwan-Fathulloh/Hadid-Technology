<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produkmodel extends Model
{
    public function allData(){
    	return DB::table('produk')->paginate(5);
    }

    public function allDatas(){
        return DB::table('produk')->get();
    }

    public function allDatak($id_produk){
        return DB::table('produk')->where('id_produk', $id_produk)->get();
    }

    public function Search($cari){
        return DB::table('produk')
        ->where('nama_produk','LIKE',"%".$cari."%")
        ->paginate();
    }

    public function detailData($id_produk){
    	return DB::table('produk')->where('id_produk', $id_produk)->first();
    }

    public function addData($data){
    	DB::table('produk')->insert($data);
    }

    public function editData($id_produk, $data){
    	DB::table('produk')
    	->where('id_produk', $id_produk)
    	->update($data);
    }

    public function deleteData($id_produk){
    	DB::table('produk')
    	->where('id_produk', $id_produk)
    	->delete();
    }

}
