<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ChatMessage;


class ChatController extends Controller
{
    public function send(Request $request)
{
    $userMessage = $request->input('message');

    // Lưu tin nhắn của user
    ChatMessage::create([
        'sender' => 'user',
        'message' => $userMessage,
    ]);

    // Bot phản hồi giả lập
    $botReply = "Bạn vừa nói: " . $userMessage;

    // Lưu phản hồi của bot
    ChatMessage::create([
        'sender' => 'bot',
        'message' => $botReply,
    ]);

    return response()->json([
        'reply' => $botReply
    ]);
    
}

}
