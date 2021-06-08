<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Jasamodel extends Model
{
    public function allData(){
    	return DB::table('jasa')->paginate(5);
    }

    public function allDatas(){
        return DB::table('jasa')->get();
    }

    public function allDatak($id_jasa){
        return DB::table('jasa')->where('id_jasa', $id_jasa)->get();
    }

    public function Search($cari){
        return DB::table('jasa')
        ->where('materi_jasa','LIKE',"%".$cari."%")
        ->paginate();
    }

    public function detailData($id_jasa){
    	return DB::table('jasa')->where('id_jasa', $id_jasa)->first();
    }

    public function addData($data){
    	DB::table('jasa')->insert($data);
    }

    public function editData($id_jasa, $data){
    	DB::table('jasa')
    	->where('id_jasa', $id_jasa)
    	->update($data);
    }

    public function deleteData($id_jasa){
    	DB::table('jasa')
    	->where('id_jasa', $id_jasa)
    	->delete();
    }

}
