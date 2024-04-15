<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\UseCase\Login\Input as UserData;
use App\UseCase\Login\UseCase as AuthUser;

class LoginController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function login(LoginRequest $request, AuthUser $auth)
    {
        
        $user_data = new UserData(
            $request->validated()["email"],
            $request->validated()["password"],
        );

        return $auth->login($user_data) ? redirect()->route("home") : back()
        ->with("fail","Conta inexistente, verifique novamente.");
    }
}
