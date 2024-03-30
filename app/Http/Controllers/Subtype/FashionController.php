<?php

namespace App\Http\Controllers\Subtype;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FashionController extends Controller
{
    public function create()
    {
        return view("product.subtypes.fashion.create");
    }
}
