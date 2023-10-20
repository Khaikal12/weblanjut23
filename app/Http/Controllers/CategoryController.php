<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function tampil(){

        $data = Category::all();

        // dd($data);

        return view('category.index', compact('data'));
    }

    public function tambah(){
        return view ('category.create');
    }

    public function simpan(Request $request){

        $request->validate([

            'name' => 'required|min:5'

        ]);
        Category::create($request->all());
        return to_route('category-index');
    }
}
