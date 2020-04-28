<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function create(Request $request) {
        $message = new Message();
        $message->content = $request->message;
        $message->save();
        return redirect('/');
    }
    
}
