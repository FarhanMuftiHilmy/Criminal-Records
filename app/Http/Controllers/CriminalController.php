<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Criminal; //add this

use File;

class CriminalController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    public function index(){
        // $data_criminal = Criminal::all()->sortBydesc('tgl_tangkap');
        // $no = 0;

        // return view('criminal.index', compact('data_criminal', 'no'));
        $batas = 5;
        $jumlah_kriminal = Criminal::count();
        $data_criminal = Criminal::orderBy('tgl_tangkap','desc')->paginate($batas);
        $no = $batas *($data_criminal->currentPage()-1);

        return view('criminal.index', compact('data_criminal','no','jumlah_kriminal'));
    }

    public function search(Request $request){
        $batas = 5;
        $cari = $request->kata;
        $data_criminal = Criminal::where('nama','like',"%".$cari."%")->orwhere('kasus','like','%'.$cari.'%')->paginate($batas);
        $jumlah_criminal = $data_criminal->count();
        $no = $batas *($data_criminal->currentPage()-1);

        return view('criminal.search', compact('data_criminal','no','jumlah_criminal','cari'));
    }

    public function create(){
        return view('criminal.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama' => 'required|string|max:20',
            'kasus' => 'required|string',
            'foto'=>'required|image|mimes:jpeg,jpg,png',
            'pidana' => 'required|string',
            'denda' => 'required|numeric',
            'tgl_tangkap' => 'required|date',
        ]);
        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();
        $foto->move('images/', $namafile);

        $criminal = new Criminal(); 
        $criminal->nama = $request->nama;
        $criminal->kasus = $request->kasus;
        $criminal->foto = $namafile;
        $criminal->pidana = $request->pidana;
        $criminal->denda = $request->denda;
        $criminal->tgl_tangkap = $request->tgl_tangkap;
        $criminal->save();
        return redirect('/criminal')->with('pesan','Data Kriminal Berhasil di simpan');
        
    }

    public function destroy($id){
        $criminal = Criminal::find($id);
        $criminal->delete();

        return redirect('/criminal');
    }

    public function edit($id){
        $criminal = Criminal::find($id);

        return view('criminal.edit', compact('criminal'));
    }

    public function update($id){
        $criminal = Criminal::find($id);
        $criminal->nama = request('nama');
        $criminal->kasus = request('kasus');
        $criminal->pidana = request('pidana');
        $criminal->denda = request('denda');
        $criminal->tgl_tangkap = request('tgl_tangkap');
        
        if (request('foto')!= null){
            File::delete('images/'.$criminal->foto);
            $foto = request('foto');
            $namafile = time().'.'.$foto->getClientOriginalExtension();
            $foto->move('images/', $namafile);
            $criminal->foto = $namafile;
        }
        $criminal->save();

        return redirect('/criminal');
    }
}
