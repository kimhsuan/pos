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

}
