<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function view(){
        return view('Admin.dashboard');
    }
}
