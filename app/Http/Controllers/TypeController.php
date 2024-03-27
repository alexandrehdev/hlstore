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
        // abort_if(!in_array("produtos",["produtos","veiculos","digital"]),404);
        // dd($request->input('tipo'));
        $type = $request->input('tipo');

        $request->session()->put(['type' => $type]);

        $route = match($type){
            'produtos' => route('subtype',['tipo' => $type]),
            'veiculos' => route('subtype',['tipo' => $type]),
            'digital' => route('subtype',['tipo' => $type])
        };

        return redirect()->to($route);
    }
}
