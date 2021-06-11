<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jasamodel;

class Jasacontroller extends Controller
{
	public function __construct(){
		$this->Jasamodel = new Jasamodel();
        $this->middleware('auth');
	}

    public function index(){
    	$data = [
    		'jasa' => $this->Jasamodel->allData(),
    	];
    	
    	return view('jasa.v_jasa', $data);
    }

    public function search(Request $request){
        $cari = $request->cari;
        $jasa = $this->Jasamodel->Search($cari);
        
        return view('jasa.v_jasa', ['jasa' => $jasa]);
    }

    public function detail($id_jasa){
        if (!$this->Jasamodel->detailData($id_jasa)) {
            abort(404);
        }
        $data = [
            'detail' => $this->Jasamodel->detailData($id_jasa),
        ];
        return view('jasa.v_detailjasa', $data);
    }

    public function add(){
        return view('jasa.v_addjasa');
    }

    public function insert(){
        Request()->validate([
            'id_jasa' => 'required',
            'materi_jasa' => 'required',
            'gambar_jasa' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
            'keterangan_jasa' => 'required',
            'kategori_jasa' => 'required',
            'harga_jasa' => 'required',
            'instruktur_jasa' => 'required',
        ], [
            'id_jasa.required' => 'Wajib diisi !!',
            'materi_jasa.required' => 'Wajib diisi !!',
            'gambar_jasa.required' => 'Wajib diisi !!',
            'keterangan_jasa.required' => 'Wajib diisi !!',
            'kategori_jasa.required' => 'Wajib diisi !!',
            'harga_jasa.required' => 'Wajib diisi !!',
            'instruktur_jasa.required' => 'Wajib diisi !!',
        ]);

        $file = Request()->gambar_jasa;
        $fileName = Request()->id_jasa.'.'.$file->extension();
        $file->move(public_path('g_jasa'), $fileName);

        $data = [
            'id_jasa' => Request()->id_jasa,
            'materi_jasa' => Request()->materi_jasa,
            'gambar_jasa' => $fileName,
            'keterangan_jasa' => Request()->keterangan_jasa,
            'kategori_jasa' => Request()->kategori_jasa,
            'harga_jasa' => Request()->harga_jasa,
            'instruktur_jasa' => Request()->instruktur_jasa,
        ];

        $this->Jasamodel->addData($data);
        alert()->success('Tambah Jasa !!!', 'Berhasil');
        return redirect()->route('jasa')->with('pesan','Data Berhasil Di Tambahkan !!!');
    }

    public function edit($id_jasa){
        if (!$this->Jasamodel->detailData($id_jasa)) {
            abort(404);
        }
        $data = [
            'edit' => $this->Jasamodel->detailData($id_jasa),
        ];
        return view('jasa.v_editjasa', $data);
    }

    public function update($id_jasa){
        Request()->validate([
            'id_jasa' => 'required',
            'materi_jasa' => 'required',
            'gambar_jasa' => '|mimes:jpg,jpeg,bmp,png|max:1024',
            'keterangan_jasa' => 'required',
            'kategori_jasa' => 'required',
            'harga_jasa' => 'required',
            'instruktur_jasa' => 'required',
        ], [
            'id_jasa.required' => 'Wajib diisi !!',
            'materi_jasa.required' => 'Wajib diisi !!',
            'keterangan_jasa.required' => 'Wajib diisi !!',
            'kategori_jasa.required' => 'Wajib diisi !!',
            'harga_jasa.required' => 'Wajib diisi !!',
            'instruktur_jasa.required' => 'Wajib diisi !!',
        ]);
        if (Request()->gambar_jasa <> "") {
            $file = Request()->gambar_jasa;
            $fileName = Request()->id_jasa.'.'.$file->extension();
            $file->move(public_path('g_jasa'), $fileName);

            $data = [
                'id_jasa' => Request()->id_jasa,
                'materi_jasa' => Request()->materi_jasa,
                'gambar_jasa' => $fileName,
                'keterangan_jasa' => Request()->keterangan_jasa,
                'kategori_jasa' => Request()->kategori_jasa,
                'harga_jasa' => Request()->harga_jasa,
                'instruktur_jasa' => Request()->instruktur_jasa,
            ];

            $this->Jasamodel->editData($id_jasa, $data);
        }else{
            $data = [
                'id_jasa' => Request()->id_jasa,
                'materi_jasa' => Request()->materi_jasa,
                'keterangan_jasa' => Request()->keterangan_jasa,
                'kategori_jasa' => Request()->kategori_jasa,
                'harga_jasa' => Request()->harga_jasa,
                'instruktur_jasa' => Request()->instruktur_jasa,
            ];

            $this->Jasamodel->editData($id_jasa, $data);
        }
        alert()->success('Ubah Jasa !!!', 'Berhasil');
        return redirect()->route('jasa')->with('pesan','Data Berhasil Di Ubah !!!');
    }

    public function delete($id_jasa){
        $jasa = $this->Jasamodel->detailData($id_jasa);
        if ($jasa->gambar_jasa <> "") {
            unlink(public_path('g_jasa').'/'.$jasa->gambar_jasa);
        }
        $this->Jasamodel->deleteData($id_jasa);
        alert()->success('Hapus Jasa !!!', 'Berhasil');
        return redirect()->route('jasa')->with('pesan','Data Berhasil Di Hapus !!!');
    }
}
