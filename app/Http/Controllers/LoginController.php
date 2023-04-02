<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function login(LoginRequest $request)
    {

        if(Auth::attempt(['email' => $request->validated()["email"], "password" => $request->validated()["password"]])){
            dd("foi");
        }else{
            dd("ops deu algum b.o ai viu");
        }
    }
}
