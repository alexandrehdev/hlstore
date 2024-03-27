<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubtypeController extends Controller
{

    public function index()
    {
        return view('product.select_subtype.index');
    }

    public function handleSubtype(Request $request)
    {

        $type = session('type');
        $subtype = $request->input('subtype');
        dd($subtype);
        $route = route('product.create') . "?tipo=" . $type . "?subtipo=" . $subtype;


        $request->session()->put(['subtype' => $subtype]);

        return redirect()->to($route);
    }
}
