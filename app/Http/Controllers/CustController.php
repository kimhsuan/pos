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
        $customer->catno = $request->input('catno');
        $customer->account = $request->input('account');
        $customer->name = $request->input('name');
        $customer->tel = $request->input('tel');
        $customer->mobile = $request->input('mobile');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->note = $request->input('note');
        $customer->save();
        
        return Redirect::to('customers');
    }
    public function show($id)
    {
        $customers = \App\Models\Customer::find($id);
        $custsorts = \App\Models\Custsort::all();;
        $data = compact('customers','custsorts');
        return view('customers.show',$data);
    }
    public function update(Request $request, $id)
    {
        $method = $request->method();
        $customer = \App\Models\Customer::find($id);
        $customer->catno = $request->input('catno');
        $customer->account = $request->input('account');
        $customer->name = $request->input('name');
        $customer->tel = $request->input('tel');
        $customer->mobile = $request->input('mobile');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->note = $request->input('note');
        $customer->save();
        
        return Redirect::to('customers');
    }
    public function delete($id)
    {
        $product = \App\Models\Customer::find($id);
        $product->delete();
        
        return Redirect::to('customers');
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
