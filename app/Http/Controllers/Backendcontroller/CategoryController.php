<?php

namespace App\Http\Controllers\Backendcontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Index view
    public function index(){
        return view('components.backend.categories.index');
    }

    //Create View
    public function create() {
        return view('components.backend.categories.create');
    }
    //Store
    //Edit View
    //Update
    //Delete
}
