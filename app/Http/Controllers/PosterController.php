<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosterController extends Controller
{
    
    public function index()
    {
        return view("posters.index");
    }

    public function create()
    {
        return view("posters.create");
    }
}
