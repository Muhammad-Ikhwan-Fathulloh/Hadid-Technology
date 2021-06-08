<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Artikelmodel extends Model
{
    public function allData(){
    	return DB::table('artikel')->paginate(5);
    }

    public function allDatas(){
        return DB::table('artikel')->get();
    }

    public function allDatak($id_artikel){
        return DB::table('artikel')->where('id_artikel', $id_artikel)->get();
    }

    public function Search($cari){
        return DB::table('artikel')
        ->where('judul_artikel','LIKE',"%".$cari."%")
        ->paginate();
    }

    public function detailData($id_artikel){
    	return DB::table('artikel')->where('id_artikel', $id_artikel)->first();
    }

    public function addData($data){
    	DB::table('artikel')->insert($data);
    }

    public function editData($id_artikel, $data){
    	DB::table('artikel')
    	->where('id_artikel', $id_artikel)
    	->update($data);
    }

    public function deleteData($id_artikel){
    	DB::table('artikel')
    	->where('id_artikel', $id_artikel)
    	->delete();
    }

}
