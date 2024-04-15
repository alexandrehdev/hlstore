<?php

namespace App\UseCase\Login;
use App\UseCase\Login\Input;
use Illuminate\Support\Facades\Auth;

class UseCase{


    public function login(Input $input)
    {
        $loginData = [
            "email" => $input->email,
            "password" => $input->password,
        ];

        return Auth::attempt($loginData); 
    }
}