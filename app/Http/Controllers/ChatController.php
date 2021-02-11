<?php

namespace App\Http\Controllers;

use App\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function all_chats()
    {
        return Chat::with('user')->orderBy('created_at', 'desc')->take(10)->get();
    }

    public function store(Request $request)
    {
        $chat = Chat::create([
            'subject' => $request->subject,
            'user_id' => auth()->user()->id
        ]);

        return $chat;
    }
}
