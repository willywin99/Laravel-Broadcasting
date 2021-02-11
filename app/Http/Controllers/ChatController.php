<?php

namespace App\Http\Controllers;

use App\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function all_chats()
    {
        return Chat::with('user')->orderBy('created_at', 'desc')->take(10)->get();
    }
}
