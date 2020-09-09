<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class html extends Controller
{
    public function index(){
        return view('blog/html');
    }
}
