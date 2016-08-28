<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Message;

use App\Repositories\MessageRepository;

class MessageController extends Controller
{

	// protected $messages;
 //    public function __construct(MessageRepository $messages) // 新增
 //    {
 //        $this->middleware('auth');

 //        $this->messages = $messages; // 新增
 //    }


    public function index(Request $request)
{
        // 等同於$messages = Message::where('user_id', $request->user()->id)->get();
	    // $messages = $request->user()->messages()->get();

	$messages = Message::all();
    return view('messages.index', [
        'messages' => $messages,
    ]);
}

	public function create()
    {
       return view('post');
    }

	public function store(Request $request)
	{
	// $this->validate($request, [
 //        'name' => 'required|max:255',
 //    ]);
 //    $request->user()->messages()->create([
 //        'name' => $request->name,
 //    ]);
	   $message = new Message;
	   $message->name = $request->name;
	   $message->subject = $request->subject;
	   $message->content = $request->content;
	   $message->save();
    return redirect('/messages');
	}

	public function destroy(Request $request, Message $message){
		$message->delete();
		return redirect('/messages');
	}

	public function edit(Message $message)
	{
		return view('messages.edit', ['message' => $message]);
	}

	public function update(Request $request, Message $message)
	{
		$message->update(['subject' => $request->subject ,
						  'content' => $request->content]);
		return redirect('/messages');
	}
} 
