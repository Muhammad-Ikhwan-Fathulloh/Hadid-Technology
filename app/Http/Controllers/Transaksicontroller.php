<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesananmodel;
use App\Pesanmodel;
use Dompdf\Dompdf;

class Transaksicontroller extends Controller
{
	public function __construct(){
		$this->Pesananmodel = new Pesananmodel();
		$this->Pesanmodel = new Pesanmodel();
        $this->middleware('auth');
	}

	public function index(){
		$transaksik = $this->Pesananmodel->lama();
		//dd($transaksik);
		$data = [
			'transaksis' => $this->Pesananmodel->lama(),
		];
		return view('transaksi.v_transaksi', $data);
	}

	public function datatransaksi(){
		$data = [

			'transaksi' => $this->Pesananmodel->allDatas(),
		];
		return view('transaksi.v_laporantransaksi', $data);
	}

	public function konfirmasi(){
		$data = [
			'konfirmasi' => $this->Pesanmodel->allDatas(),
		];

		return view('transaksi.v_konfirmasi', $data);
	}

	public function detail($pesanid){
		
		$data = [
			'detailk' => $this->Pesananmodel->cek_produk($pesanid),
			'totalpesan' => $this->Pesananmodel->lamak($pesanid),
		];
		return view('transaksi.v_detailtransaksi', $data);
	}

	public function cetak($pesanid){
		$transaksik = $this->Pesananmodel->lama();
		//dd($transaksik);
		
		$data = [
			'detailk' => $this->Pesananmodel->cek_produk($pesanid),
			'totalpesan' => $this->Pesananmodel->lamak($pesanid),
		];

		return view('cetak.v_cetakstruk', $data);
	}

	public function cetakpdf($pesanid){
		$transaksik = $this->Pesananmodel->lama();
		//dd($transaksik);
		
		$data = [
			'detailk' => $this->Pesananmodel->cek_produk($pesanid),
			'totalpesan' => $this->Pesananmodel->lamak($pesanid),
		];

		$html = view('cetak.v_cetakstrukpdf', $data);

		$dompdf = new Dompdf();
		$dompdf->loadHtml($html);
		$options = $dompdf->getOptions();
		$options->setHtml5ParserEnabled(true);
		$dompdf->setOptions($options);
		$dompdf->setPaper('A4', 'landscape');
		$dompdf->render();
		$dompdf->stream();
	}

	public function setujuikonfirmasi($id_pesan){
		$data = [
			'konfirmasi' => 1,
		];
		$this->Pesanmodel->editData($id_pesan, $data);

		alert()->success('Setujui Konfirmasi !!!', 'Berhasil');
        return redirect()->route('konfirmasi')->with('pesan','Berhasil Konfirmasi !!!');
	}

	public function batalkankonfirmasi($id_pesan){
		$data = [
			'konfirmasi' => 0,
		];
		$this->Pesanmodel->editData($id_pesan, $data);

		alert()->success('Batalkan Konfirmasi !!!', 'Berhasil');
        return redirect()->route('konfirmasi')->with('pesan','Berhasil Konfirmasi !!!');
	}

	public function detailkk($id_pesan){
		
		$data = [
			'detailk' => $this->Pesananmodel->cek_produk($id_pesan),
			'totalpesan' => $this->Pesananmodel->lamakk($id_pesan),
		];
		return view('transaksi.v_cekkonfirmasi', $data);
	}

	public function cetakadmin($id_pesan){
		$transaksik = $this->Pesananmodel->lama();
		//dd($transaksik);
		
		$data = [
			'detailk' => $this->Pesananmodel->cek_produk($id_pesan),
			'totalpesan' => $this->Pesananmodel->lamakk($id_pesan),
		];

		return view('cetak.v_cetakstruk', $data);
	}

	public function laporan(Request $request){
		$tgl_awal = $request->tgl_awal;
		$tgl_akhir = $request->tgl_akhir;

		$data = [
			'tgl_awal' => $tgl_awal,
			'tgl_akhir' => $tgl_akhir,
			'transaksi' => $this->Pesananmodel->laporan($tgl_awal, $tgl_akhir),
		];

		return view('transaksi.v_laporantransaksi', $data);
	}

	public function cetaklaporan(Request $request){
		$tgl_awal = $request->tgl_awal;
		$tgl_akhir = $request->tgl_akhir;

		$data = [
			'transaksi' => $this->Pesananmodel->allDatas(),
			'tanggal_awal' => $request->tgl_awal,
			'tanggal_akhir' => $request->tgl_akhir,
		];

		return view('cetak.v_laporankeuangan', $data);
	}
}