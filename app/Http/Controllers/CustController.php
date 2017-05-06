<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;

class CustController extends Controller
{
    public function index()
    {
        $customers = \App\Models\Customer::all();
        $data = compact('customers');
        return view('customers.index',$data);
    }
    public function create()
    {
        $custsorts = \App\Models\Custsort::all();;
        $data = compact('custsorts');
        return view('customers.create',$data);
    }
    public function save(Request $request)
    {
        $method = $request->method();
        $customer = new \App\Models\Customer;
        $customer->catno = $request['catno'];
        $customer->account = $request['account'];
        $customer->name = $request['name'];
        $customer->tel = $request['tel'];
        $customer->mobile = $request['mobile'];
        $customer->email = $request['email'];
        $customer->address = $request['address'];
        $customer->note = $request['note'];
        $customer->save();
        
        return Redirect::to('customers');
    }
    public function show($id)
    {
        $customer = \App\Models\Customer::find($id);
        $data = compact('customer');
        return view('customers.show',$data);
    }
        public function sort()
    {
        $custsorts = \App\Models\Custsort::all();
        $data = compact('custsorts');
        return view('customers.sort',$data);
    }
        public function newsort()
    {
        return view('customers.newsort');
    }
        public function sortadd(Request $request)
    {
        $method = $request->method();
        $post = new \App\Models\Custsort;
        $post->name = $request['name'];
        $post->save();
        
        return Redirect::to('customers/sort');
    }
    
    
}
