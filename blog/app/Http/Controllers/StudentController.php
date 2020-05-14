<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\university;
use App\subject;

class StudentController extends Controller
{
    public function index(Request $request, $id) {
        $university = university::all();
        $subject = subject::all();
        if ( $request->input('subject') == true) {
            return view('studentlist', ['folder' => $subject, 'folderId' => $id]);
        } else {
            return view('studentlist', ['folder' => $university, 'folderId' => $id]);
        }
    }
}
