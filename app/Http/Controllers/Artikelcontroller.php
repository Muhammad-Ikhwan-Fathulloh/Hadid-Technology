<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikelmodel;

class Artikelcontroller extends Controller
{
	public function __construct(){
		$this->Artikelmodel = new Artikelmodel();
        $this->middleware('auth');
	}

    public function index(){
    	$data = [
    		'artikel' => $this->Artikelmodel->allData(),
    	];
    	
    	return view('artikel.v_artikel', $data);
    }

    public function search(Request $request){
        $cari = $request->cari;
        $artikel = $this->Artikelmodel->Search($cari);
        
        return view('artikel.v_artikel', ['artikel' => $artikel]);
    }

    public function detail($id_artikel){
        if (!$this->Artikelmodel->detailData($id_artikel)) {
            abort(404);
        }
        $data = [
            'detail' => $this->Artikelmodel->detailData($id_artikel),
        ];
        return view('artikel.v_detailartikel', $data);
    }

    public function detailk($id_artikel){
        if (!$this->Artikelmodel->detailData($id_artikel)) {
            abort(404);
        }
        $data = [
            'detail' => $this->Artikelmodel->detailData($id_artikel),
        ];
        return view('web.v_artikelbaca', $data);
    }

    public function add(){
        return view('artikel.v_addartikel');
    }

    public function insert(){
        Request()->validate([
            'id_artikel' => 'required',
            'judul_artikel' => 'required',
            'gambar_artikel' => '|mimes:jpg,jpeg,bmp,png|max:1024',
            'kategori_artikel' => 'required',
            'keterangan_artikel' => 'required',
            'penulis_artikel' => 'required',
            'isi_artikel' => 'required',
        ], [
            'id_artikel.required' => 'Wajib diisi !!',
            'judul_artikel.required' => 'Wajib diisi !!',
            'kategori_artikel.required' => 'Wajib diisi !!',
            'keterangan_artikel.required' => 'Wajib diisi !!',
            'penulis_artikel.required' => 'Wajib diisi !!',
            'isi_artikel.required' => 'Wajib diisi !!',
        ]);

        $file = Request()->gambar_artikel;
        $fileName = Request()->id_artikel.'.'.$file->extension();
        $file->move(public_path('g_artikel'), $fileName);

        $data = [
            'id_artikel' => Request()->id_artikel,
            'judul_artikel' => Request()->judul_artikel,
            'gambar_artikel' => $fileName,
            'kategori_artikel' => Request()->kategori_artikel,
            'keterangan_artikel' => Request()->keterangan_artikel,
            'penulis_artikel' => Request()->penulis_artikel,
            'isi_artikel' => Request()->isi_artikel,
        ];

        $this->Artikelmodel->addData($data);
        alert()->success('Tambah Artikel !!!', 'Berhasil');
        return redirect()->route('artikel')->with('pesan','Data Berhasil Di Tambahkan !!!');
    }

    public function edit($id_artikel){
        if (!$this->Artikelmodel->detailData($id_artikel)) {
            abort(404);
        }
        $data = [
            'edit' => $this->Artikelmodel->detailData($id_artikel),
        ];
        return view('artikel.v_editartikel', $data);
    }

    public function update($id_artikel){
        Request()->validate([
            'id_artikel' => 'required',
            'judul_artikel' => 'required',
            'gambar_artikel' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
            'kategori_artikel' => 'required',
            'keterangan_artikel' => 'required',
            'penulis_artikel' => 'required',
            'isi_artikel' => 'required',
        ], [
            'id_artikel.required' => 'Wajib diisi !!',
            'judul_artikel.required' => 'Wajib diisi !!',
            'gambar_artikel.required' => 'Wajib diisi !!',
            'kategori_artikel.required' => 'Wajib diisi !!',
            'keterangan_artikel.required' => 'Wajib diisi !!',
            'penulis_artikel.required' => 'Wajib diisi !!',
            'isi_artikel.required' => 'Wajib diisi !!',
        ]);
        if (Request()->gambar_artikel <> "") {
            $file = Request()->gambar_artikel;
            $fileName = Request()->id_artikel.'.'.$file->extension();
            $file->move(public_path('g_artikel'), $fileName);

            $data = [
                'id_artikel' => Request()->id_artikel,
                'judul_artikel' => Request()->judul_artikel,
                'gambar_artikel' => $fileName,
                'kategori_artikel' => Request()->kategori_artikel,
                'keterangan_artikel' => Request()->keterangan_artikel,
                'penulis_artikel' => Request()->penulis_artikel,
                'isi_artikel' => Request()->isi_artikel,
            ];

            $this->Artikelmodel->editData($id_artikel, $data);
        }else{
            $data = [
                'id_artikel' => Request()->id_artikel,
                'judul_artikel' => Request()->judul_artikel,
                'kategori_artikel' => Request()->kategori_artikel,
                'keterangan_artikel' => Request()->keterangan_artikel,
                'penulis_artikel' => Request()->penulis_artikel,
                'isi_artikel' => Request()->isi_artikel,
            ];

            $this->Artikelmodel->editData($id_artikel, $data);
        }
        alert()->success('Ubah Artikel !!!', 'Berhasil');
        return redirect()->route('artikel')->with('pesan','Data Berhasil Di Ubah !!!');
    }

    public function delete($id_artikel){
        $artikel = $this->Artikelmodel->detailData($id_artikel);
        if ($artikel->gambar_artikel <> "") {
            unlink(public_path('g_artikel').'/'.$artikel->gambar_artikel);
        }
        $this->Artikelmodel->deleteData($id_artikel);
        alert()->success('Hapus Artikel !!!', 'Berhasil');
        return redirect()->route('artikel')->with('pesan','Data Berhasil Di Hapus !!!');
    }
}
