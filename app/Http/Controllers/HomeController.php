<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesananmodel;
use App\Pesanmodel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->Pesananmodel = new Pesananmodel();
        $this->Pesanmodel = new Pesanmodel();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userpesan = $this->Pesananmodel->baru();
                
        if (!empty($userpesan)) {
            $pesanid = $userpesan->id_pesan;
                       
            $datak = [
                'transaksi' => $this->Pesananmodel->user_data(),
                'belumkonfirmasi' => $this->Pesanmodel->belumkonfirmasi(),
                'sudahkonfirmasi' => $this->Pesanmodel->sudahkonfirmasi(),
                'belumkonfirmasiuser' => $this->Pesanmodel->belumkonfirmasiuser(),
                'sudahkonfirmasiuser' => $this->Pesanmodel->sudahkonfirmasiuser(),
                'jumlah_data' => $this->Pesanmodel->jumlah_data(),
                'notifk' => $this->Pesananmodel->notif($pesanid),
                'jumlahuser' => $this->Pesanmodel->jumlahuser(),
            ];
        }else{
            $datak = [
                'transaksi' => $this->Pesananmodel->user_data(),
                'belumkonfirmasi' => $this->Pesanmodel->belumkonfirmasi(),
                'sudahkonfirmasi' => $this->Pesanmodel->sudahkonfirmasi(),
                'belumkonfirmasiuser' => $this->Pesanmodel->belumkonfirmasiuser(),
                'sudahkonfirmasiuser' => $this->Pesanmodel->sudahkonfirmasiuser(),
                'jumlah_data' => $this->Pesanmodel->jumlah_data(),
                'notifk' => 0,
                'jumlahuser' => $this->Pesanmodel->jumlahuser(),
            ];     
        }
        
        return view('home', $datak);
        
    }
}
