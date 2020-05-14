<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\university;

class HomeController extends Controller
{
    public function index() {
        $university = university::all();
        return view('welcome', ['universities' => $university]);
    }
    public function create() {
        return view('welcome', ['university' => [] ]);
    }
    public function store(Request $request) {
        $university = university::create($request->all());
        return redirect()->route('welcome',$university);
    }
    public function show(university $university) {
        return view('welcome', ['university' => $university]);
    }
 }
