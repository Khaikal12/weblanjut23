<?php

namespace App\Http\Controllers;

use App\Models\Mid;
use Illuminate\Http\Request;

class MidController extends Controller
{
    public function tampil(){
        $data = Mid::all();

        // dd($data);

        return view('Ujianuts.index', compact('data'));
    }

    public function tambah(){
        return view('Ujianuts.create');
    }

    public function simpan(Request $request){
        $request->validate([
            'judul_ujian' => 'required',
            'isi_ujian' => 'required',
            'penulis_soal' => 'required',
            'keterangan' => 'required',
            'tahun_ujian' => 'required'
        ]);

        Mid::create($request->all());
        return to_route('ujianuts-index');
    }

    public function delete($id){
        Mid::find($id)->delete();
        return to_route('ujianuts-index');
    }

    public function edit($id){
        $data = Mid::find($id);
        return view('ujianuts.edit', compact('data'));
    }

    public function update(Request $request, $id){
        Mid::find($id)->update($request->all());
        return to_route('ujianuts-index');
    }
}
