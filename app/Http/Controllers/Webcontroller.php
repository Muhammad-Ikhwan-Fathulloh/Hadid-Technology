<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produkmodel;
use App\Artikelmodel;
use App\Jasamodel;
use App\Pesanmodel;
use App\Pesananmodel;
use auth;

class Webcontroller extends Controller
{
	public function __construct(){
	   $this->Produkmodel = new Produkmodel();
     $this->Artikelmodel = new Artikelmodel();
     $this->Jasamodel = new Jasamodel();
     $this->Pesanmodel = new Pesanmodel();
                $this->Pesananmodel = new Pesananmodel();
     $this->middleware('auth');
	}

	public function index(){
        if (auth()->user()->level==1) {
            return redirect('home');
        }else{
            $data = [
            'produk' => $this->Produkmodel->allDatas(),
            'artikel' => $this->Artikelmodel->allData(),
            'jasa' => $this->Jasamodel->allData(),
            ];

        $userpesan = $this->Pesananmodel->baru();
                
                if (!empty($userpesan)) {
                    $pesanid = $userpesan->id_pesan;
                $datak = [
                        'notifk' => $this->Pesananmodel->notif($pesanid),
                ];
                }
                else{

                $datak = [
                        'notifk' => 0,
                ];
                }
                
        
        return view('web.web_produk', $data, $datak);
        }
    	
    }
}