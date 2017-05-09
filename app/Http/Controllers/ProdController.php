<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;

class ProdController extends Controller
{

    public function index()
    {
        $products = \App\Models\Product::all();
        $data = compact('products');
        return view('products.index',$data);
    }
    public function create()
    {
        $prodsorts = \App\Models\Prodsort::all();;
        $units = \App\Models\Unit::all();;
        $data = compact('prodsorts','units');
        return view('products.create',$data);
    }
    
        public function sort()
    {
        $prodsorts = \App\Models\Prodsort::all();
        $data = compact('prodsorts');
        return view('products.sort',$data);
    }
    
    public function save(Request $request)
    {
        $method = $request->method();
        $product = new \App\Models\Product;
        $product->catno = $request->input('catno');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->cost = $request->input('cost');
        $product->stock = $request->input('stock');
        $product->save = $request->input('save');
        $product->sold = $request->input('sold');
        $product->unit = $request->input('unit');
        $product->note = $request->input('note');
        $product->save();
        
        return Redirect::to('products');
    }
        public function show($id)
    {
        $products = \App\Models\Product::find($id);
        $prodsorts = \App\Models\Prodsort::all();;
        $units = \App\Models\Unit::all();;
        $data = compact('products','prodsorts','units');
        return view('products.show',$data);
    }
    
    public function update(Request $request, $id)
    {
        $method = $request->method();
        $product = \App\Models\Product::find($id);
        $product->catno = $request->input('catno');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->cost = $request->input('cost');
        $product->stock = $request->input('stock');
        $product->save = $request->input('save');
        $product->sold = $request->input('sold');
        $product->unit = $request->input('unit');
        $product->note = $request->input('note');
        $product->save();
        
        return Redirect::to('products');
    }
    
    public function delete($id)
    {
        $product = \App\Models\Product::find($id);
        $product->delete();
        
        return Redirect::to('products');
    }

}
