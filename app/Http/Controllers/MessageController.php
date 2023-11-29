<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function all() {
        $messages = Message::all();

        return view('messages.all', [
            'messages' => $messages
        ]);
    }

    public function unread() {
        $messages = Message::where('status', Message::UNREAD)->get();

        return view('messages.unread', [
            'messages' => $messages
        ]);
    }

    public function read() {
        $messages = Message::where('status', Message::READ)->get();

        return view('messages.read', [
            'messages' => $messages
        ]);
    }

    public function sendView() {
        return view('contact');
    }

    public function send(REQUEST $request) {
        $request->validate([
            'name' => 'bail|required|regex:/^[a-zA-Z0-9\s]+$/',
            'email' => 'bail|required|email',
            'message' => 'bail|required|max:500'
        ], [
            'name.required' => 'Please enter your name',
            'name.regex' => 'Name can only contain alphanumeric characters and space',
            'email.required' => 'Please enter your email',
            'email.email' => 'Please enter a valid email address',
            'message.required' => 'Please enter your message',
            'message.max' => 'Message cannot be longer than 500 characters'
        ]);

        Message::create([
            'sender_name' => $request->name,
            'sender_email' => $request->email,
            'body' => $request->message
        ]);

        return redirect()->route('home');
    }
}
