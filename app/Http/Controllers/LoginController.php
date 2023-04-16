<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function login(LoginRequest $request)
    {
    
        if(
            Auth::attempt([
                'email' => $request->validated()["email"], 
                "password" => $request->validated()["password"]]
            )){
                return redirect()->route("home");
        }else{
            return back()->with("fail","Conta inexistente, verifique novamente.");
        }
    }
}
