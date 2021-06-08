<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanmodel;
use App\Pesananmodel;
use App\Produkmodel;
use Auth;
use Alert;
use Carbon\Carbon;

class Pesancontroller extends Controller
{
	public function __construct(){
		$this->Pesanmodel = new Pesanmodel();
                $this->Pesananmodel = new Pesananmodel();
		$this->Produkmodel = new Produkmodel();
                $this->middleware('auth');
	}

	public function insert(Request $request, $id_produk){
		$produk = $this->Produkmodel->detailData($id_produk);
                $stok = $produk->stok_produk;
                $harga = $produk->hargajual_produk;
                $pesanan = $request->jumlah_pesan;
                //dd($id_produk);
                //validasi stok
                if ($pesanan > $stok) {
                    alert()->success('Melebihi Stok yang ada !!!', 'Gagal');
                        return redirect('pesan/detail/'.$id_produk);
                }
                //validasi user
                $cek_pesanan = $this->Pesananmodel->baru();
                if (empty($cek_pesanan)) {
                        $data = [
                                'id_user' => Auth::user()->id,
                                'jumlah_harga' => 0,
                                'status' => 0,
                        ];
                        $this->Pesanmodel->addData($data);
                }

                $pesananid = $this->Pesananmodel->baru();

                //validasi produk
                $cek_detail = $this->Pesananmodel->cek_data($id_produk, $pesananid);
                //dd($cek_detail);
                if (empty($cek_detail)) {
                        
                        $datas = [
                                'id_produk' => $id_produk,
                                'id_pesan' => $pesananid->id_pesan,
                                'jumlah' => $pesanan,
                                'jumlah_harga' => $harga*$pesanan,
                        ];

                        $this->Pesananmodel->addData($datas);
                }else{
                       $cek_detail = $this->Pesananmodel->cek_data($id_produk, $pesananid);
                       $id_pesanan = $cek_detail->id_pesanan;

                        $datas = [
                                'id_produk' => $id_produk,
                                'id_pesan' => $pesananid->id_pesan,
                                'jumlah' => $cek_detail->jumlah+$pesanan,
                                'jumlah_harga' => $cek_detail->jumlah_harga+$harga*$pesanan,
                        ];
                        $this->Pesananmodel->editDatas($id_pesanan, $datas);
                }
                $pesananedit = $this->Pesananmodel->baru();
                $id_pesan = $pesananedit->id_pesan;
                $pesananedit->jumlah_harga = $pesananedit->jumlah_harga+$harga*$pesanan;
                        $data = [
                                'jumlah_harga' => $pesananedit->jumlah_harga,
                        ];
                        $this->Pesanmodel->editData($id_pesan, $data);
                        
                        $pesanan = $this->Pesananmodel->baru();
        $pesanid = $pesanan->id_pesan;
        $produk = $this->Pesananmodel->cek_produks($pesanid);
        $produkid = $id_produk;

        $datas = [
                'stok_produk' => $produk->stok_produk - $request->jumlah_pesan,
        ];
        //dd($produkid, $datas);
        $this->Pesananmodel->editData($produkid, $datas);
                

        //dd($produk, $harga, $pesanan, $data, $datas);
        alert()->success('Berhasil ditambahkan ke keranjang !!!', 'Berhasil');
        //Alert::success('Berhasil ditambahkan ke keranjang !!!', 'Success');
        return redirect()->route('web')->with('pesan','Berhasil ditambahkan ke keranjang !!!');
	}

        public function pesanan_user(){
                $userpesan = $this->Pesananmodel->baru();
                
                if (!empty($userpesan)) {
                        $pesanid = $userpesan->id_pesan;
                       $data_produk = [
                        'produk_detail' => $this->Pesananmodel->cek_produk($pesanid),
                        'totalpesan' => $this->Pesananmodel->baru(),
                        ];

                        $datak = [
                                'notifk' => $this->Pesananmodel->notif($pesanid),
                        ];
                }else{
                   $data_produk = [
                        'produk_detail' => $this->Pesananmodel->cek_produk(0),
                        'totalpesan' => $this->Pesananmodel->baru(),
                ];
                $datak = [
                        'notifk' => 0,
                ];     
                }

                return view('web.cek_produk', $data_produk, $datak);
        }

        public function delete($id_pesanan){
                $id_pesan = $this->Pesananmodel->pesanancek($id_pesanan);
                $pesanan_user = $this->Pesananmodel->pesancek($id_pesan->id_pesan);
                $pesanan_user->jumlah_harga = $pesanan_user->jumlah_harga - $id_pesan->jumlah_harga;
                $pesanid = $id_pesanan;
                $pesanan = $this->Pesananmodel->baru();
                $pesanid = $pesanan->id_pesan;
                $produk = $this->Pesananmodel->cek_produks($pesanid);
                $produkid = $produk->id_produk;
                
                $data = [
                        'jumlah_harga' => $pesanan_user->jumlah_harga,
                ];
                $datas = [
                        'stok_produk' => $produk->stok_produk + $produk->jumlah,
                ];
                $this->Pesanmodel->editData($pesanan_user->id_pesan, $data);
                $this->Pesananmodel->editData($produkid, $datas);
                $this->Pesananmodel->deleteData($id_pesanan);
                alert()->success('Data Berhasil Di Batalkan !!!', 'Berhasil');
                return redirect()->route('pesanan')->with('pesan','Data Berhasil Di Hapus !!!');
    }

    public function konfirmasi($id_produk){
        $pesanan = $this->Pesananmodel->baru();
        $pesanid = $pesanan->id_pesan;
        $produk = $this->Pesananmodel->cek_produks($pesanid);
        $produkid = $id_produk;
        $data = [
                'status' => 1,
        ];
        // $datas = [
        //         'stok_produk' => $produk->stok_produk - $produk->jumlah,
        // ];
        //dd($produkid, $datas);
        // $this->Pesananmodel->editData($produkid, $datas);
        $this->Pesanmodel->editData($pesanid, $data);
          
        alert()->success('Berhasil Check Out !!!', 'Berhasil');
        return redirect()->route('pesanan')->with('pesan','Berhasil Check Out !!!');
    }
}