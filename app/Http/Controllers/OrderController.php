<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{

    public function index()
    {
        $orders = \App\Models\Order::all();
        return view('orders.index',['orders' => $orders]);
    }
    
    public function new()
    {
        $products = Product::all();
        return view('orders.new')->with('products', $products);

    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addItem ($productId){

        $cart = Cart::where('user_id',Auth::user()->id)->first();

        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }

        $cartItem  = new Cartitem();
        $cartItem->product_id=$productId;
        $cartItem->cart_id= $cart->id;
        $cartItem->save();

        return redirect('/orders/cart');
    }
    
    public function showCart(){
        $cart = Cart::where('user_id',Auth::user()->id)->first();

        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }

        $items = $cart->cartItems;
        $total=0;
        foreach($items as $item){
            $total+=$item->product->price;
        }

        return view('orders.view',['items'=>$items,'total'=>$total]);
    }

    public function removeItem($id){

        CartItem::destroy($id);
        return redirect('/orders/cart');
    }
    
    public function create()
    {
        $cart = Cart::where('user_id',Auth::user()->id)->first();

        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }
        
        $items = $cart->cartItems;
        $total=0;
        foreach($items as $item){
            $total+=$item->product->price;
        }
        
        $customers = \App\Models\Customer::all();;
        $products = Product::all();;
        $transits = \App\Models\Transit::all();;
        $data = compact('customers','products','transits');
        
        return view('orders.create',$data,['items'=>$items,'total'=>$total]);
    }
    
    public function save(Request $request)
    {
        $method = $request->method();
        $order = new \App\Models\Order;
        $order->date = $request['date'];
        $order->cuno = $request['cuno'];
        $order->fare = $request['fare'];
        $order->price = $request['price'];
        $order->paytime = $request['paytime'];
        $order->deliverytime = $request['deliverytime'];
        $order->transit = $request['transit'];
        $order->note = $request['note'];
        $order->save();
        
        return Redirect::to('orders');
    }

}
