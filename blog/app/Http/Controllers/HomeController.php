<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class HomeController extends Controller
{
    public function index() {
        $messages = Message::all();
        return view('messages', ['messages' => $messages, 'someString' => 'Some String that exists']);
    }
    public function sayHi(Request $request, $id) {
        return view('greeting', ['name' => $request->input('name'), 'id' => $id]);
    }
 }
