<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['title' => 'Гостевая книга',
            'pagetitle' => 'Гостевая книга',
            'messages' => Message::latest()->paginate(5),
            'count' => Message::count()
        ];
        return view('pages.messages.index', $data);
    }

    public function insert(Request $request)
    {
        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();
        return redirect('/');
    }

    public function delete($id)
    {
        Message::destroy($id);
        return redirect('/');
    }

    public function edit($id)
    {
        $message = Message::find($id);
        $data = ['title' => 'Гостевая книга',
            'pagetitle' => 'Редактирование гостевой книги',
            'id' => $message
        ];
        return view('pages.messages.edit', $data);
    }
}
