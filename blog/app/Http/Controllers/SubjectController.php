<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\subject;

class SubjectController extends Controller
{
    public function index(Request $request, $id) {
        $student = student::all();
        return view('subjectlist', ['students' => $student, 'studId' => $id]);
    }
}
