<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StatController extends Controller
{

    public function index()
    {
        $products = \App\Models\Product::all();
        $data = compact('products');
        return view('statistics.index');
    }
    
    public function inventory()
    {
        $products = \App\Models\Product::all();
        $data = compact('products');
        return view('statistics.inventory',$data);
    }

}
