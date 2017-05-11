<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;
use App\Repositories\MessageRepository;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(MessageRepository $messages)
    {
        $this->middleware('auth');
        $this->messages = $messages;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $messages = \App\Models\Message::all();
        $data = compact('messages');
        return view('home',$data);;
    }
}
