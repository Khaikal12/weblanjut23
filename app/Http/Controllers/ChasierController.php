<?php

namespace App\Http\Controllers;

use App\Models\Chasier;
use Illuminate\Http\Request;

class ChasierController extends Controller
{
    public function tampil(){
        $data = Chasier::all();

        // dd($data);

        return view('chasier.index', compact('data'));
    }

    public function tambah(){
        return view('chasier.create');
    }

    public function simpan(Request $request){
        $request->validate([
            'name' => 'required|min:5',
            'phone' => 'required',
            'age' => 'required|min:2'
        ]);

        Chasier::create($request->all());
        return to_route('chasier-index');
    }
}
