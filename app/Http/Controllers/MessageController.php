<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Message;
use App\Repositories\MessageRepository;

class MessageController extends Controller
{

    public function __construct(MessageRepository $messages)
    {
        $this->middleware('auth');
        $this->messages = $messages;
    }
    
    public function index(Request $request)
    {
        $messages = $request->user()->messages()->get();
        return view('messages.index', [
            'messages' => $messages,
        ]);
    }

    public function store(Request $request)
    {
       $this->validate($request, [
           'name' => 'required|max:255',
       ]);

        $request->user()->messages()->create([
            'name' => $request->name,
        ]);
    
        return redirect('/');
    }
    
    public function destroy(Request $request, Message $message)
    {
        $message->delete();

        return redirect('/');
}

}
