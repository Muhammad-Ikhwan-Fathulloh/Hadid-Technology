<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produkmodel;

class Produkcontroller extends Controller
{
	public function __construct(){
		$this->Produkmodel = new Produkmodel();
        $this->middleware('auth');
	}

    public function index(){
    	$data = [
    		'produk' => $this->Produkmodel->allData(),
    	];
    	
    	return view('produk.v_produk', $data);
    }

    public function search(Request $request){
        $cari = $request->cari;
        $produk = $this->Produkmodel->Search($cari);
        
        return view('produk.v_produk', ['produk' => $produk]);
    }

    public function detail($id_produk){
        if (!$this->Produkmodel->detailData($id_produk)) {
            abort(404);
        }
        $data = [
            'detail' => $this->Produkmodel->detailData($id_produk),
        ];
        return view('produk.v_detailproduk', $data);
    }

    public function detailk($id_produk){
        if (!$this->Produkmodel->detailData($id_produk)) {
            abort(404);
        }
        $data = [
            'detail' => $this->Produkmodel->detailData($id_produk),
        ];
        return view('web.detail_produk', $data);
    }

    public function add(){
        return view('produk.v_addproduk');
    }

    public function insert(){
        Request()->validate([
            'id_produk' => 'required',
            'nama_produk' => 'required',
            'gambar_produk' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
            'hargabeli_produk' => 'required',
            'hargajual_produk' => 'required',
            'stok_produk' => 'required',
            'keterangan_produk' => 'required',
        ], [
            'id_produk.required' => 'Wajib diisi !!',
            'nama_produk.required' => 'Wajib diisi !!',
            'gambar_produk.required' => 'Wajib diisi !!',
            'hargabeli_produk.required' => 'Wajib diisi !!',
            'hargajual_produk.required' => 'Wajib diisi !!',
            'stok_produk.required' => 'Wajib diisi !!',
            'keterangan_produk.required' => 'Wajib diisi !!',
        ]);

        $file = Request()->gambar_produk;
        $fileName = Request()->id_produk.'.'.$file->extension();
        $file->move(public_path('g_produk'), $fileName);

        $data = [
            'id_produk' => Request()->id_produk,
            'nama_produk' => Request()->nama_produk,
            'gambar_produk' => $fileName,
            'hargabeli_produk' => Request()->hargabeli_produk,
            'hargajual_produk' => Request()->hargajual_produk,
            'stok_produk' => Request()->stok_produk,
            'keterangan_produk' => Request()->keterangan_produk,
        ];

        $this->Produkmodel->addData($data);
        alert()->success('Tambah Produk !!!', 'Berhasil');
        return redirect()->route('produk')->with('pesan','Data Berhasil Di Tambahkan !!!');
    }

    public function edit($id_produk){
        if (!$this->Produkmodel->detailData($id_produk)) {
            abort(404);
        }
        $data = [
            'edit' => $this->Produkmodel->detailData($id_produk),
        ];
        return view('produk.v_editproduk', $data);
    }

    public function update($id_produk){
        Request()->validate([
            'id_produk' => 'required',
            'nama_produk' => 'required',
            'gambar_produk' => '|mimes:jpg,jpeg,bmp,png|max:1024',
            'hargabeli_produk' => 'required',
            'hargajual_produk' => 'required',
            'stok_produk' => 'required',
            'keterangan_produk' => 'required',
        ], [
            'id_produk.required' => 'Wajib diisi !!',
            'nama_produk.required' => 'Wajib diisi !!',
            'hargabeli_produk.required' => 'Wajib diisi !!',
            'hargajual_produk.required' => 'Wajib diisi !!',
            'stok_produk.required' => 'Wajib diisi !!',
            'keterangan_produk.required' => 'Wajib diisi !!',
        ]);
        if (Request()->gambar_produk <> "") {
            $file = Request()->gambar_produk;
            $fileName = Request()->id_produk.'.'.$file->extension();
            $file->move(public_path('g_produk'), $fileName);

            $data = [
                'id_produk' => Request()->id_produk,
                'nama_produk' => Request()->nama_produk,
                'gambar_produk' => $fileName,
                'hargabeli_produk' => Request()->hargabeli_produk,
                'hargajual_produk' => Request()->hargajual_produk,
                'stok_produk' => Request()->stok_produk,
                'keterangan_produk' => Request()->keterangan_produk,
            ];

            $this->Produkmodel->editData($id_produk, $data);
        }else{
            $data = [
                'id_produk' => Request()->id_produk,
                'nama_produk' => Request()->nama_produk,
                'hargabeli_produk' => Request()->hargabeli_produk,
                'hargajual_produk' => Request()->hargajual_produk,
                'stok_produk' => Request()->stok_produk,
                'keterangan_produk' => Request()->keterangan_produk,
            ];

            $this->Produkmodel->editData($id_produk, $data);
        }
        alert()->success('Ubah Produk !!!', 'Berhasil');
        return redirect()->route('produk')->with('pesan','Data Berhasil Di Ubah !!!');
    }

    public function delete($id_produk){
        $produk = $this->Produkmodel->detailData($id_produk);
        if ($produk->gambar_produk <> "") {
            unlink(public_path('g_produk').'/'.$produk->gambar_produk);
        }
        $this->Produkmodel->deleteData($id_produk);
        alert()->success('Hapus Produk !!!', 'Berhasil');
        return redirect()->route('produk')->with('pesan','Data Berhasil Di Hapus !!!');
    }
}
