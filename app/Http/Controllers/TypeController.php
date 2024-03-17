<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        return view('product.select_type.index');
    }

    public function handleType(Request $request)
    {
        $type = $request->input('type');

        $route = match($type){
            'products' => '',
            'vehicle' => '',
            'digital' => ''
        };

        return redirect()->to($route);
    }
}
