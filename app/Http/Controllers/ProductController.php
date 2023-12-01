<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::with('category')->get();

        // dd($data);

        return view('product.index', compact('data'));
    }

    public function create()
    {
        $data_category = Category::all();
        return view('product.create', compact('data_category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "description" => "required",
            "price" => "required",
            "category_id" => "required",
        ]);

        Product::create($request->all());
        return redirect()->route("products.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view("product.edit", compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            "name" => "required",
            "description" => "required",
            "price" => "required",
            "category_id" => "required",
        ]);
        $product->update($request->all());
        return to_route("products.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route("products.index")->with("success", "Data berhasil disimpan");
    }
}
