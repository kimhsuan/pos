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
        $product->catno = $request['catno'];
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->cost = $request['cost'];
        $product->stock = $request['stock'];
        $product->save = $request['save'];
        $product->unit = $request['unit'];
        $product->note = $request['note'];
        $product->save();
        
        return Redirect::to('customers');
    }
        public function show($id)
    {
        $product = \App\Models\Product::find($id);
        $data = compact('product');
        return view('products.show',$data);
    }

}
