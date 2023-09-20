<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('main/home');
    }
    public function laporan(){
        return view('main/laporan');
    }
    public function contack(){
        return view('main/contack');
    }
}
