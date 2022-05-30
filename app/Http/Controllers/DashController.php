<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    
    public function index() {
        $this->middleware('auth');
        return view('dashboard');
    }
}
