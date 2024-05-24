<?php

namespace App\Http\Controllers\Backendcontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('components.dashboard.index');
    }
}
