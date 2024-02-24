<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\UseCase\Register\UseCase as CreateUser;
use App\UseCase\Register\Input as UserInput;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request, CreateUser $create_user) :RedirectResponse
    { 
        $data = $request->validated();
        
        $user_input = new UserInput(
            $data["name"],
            $data["email"],
            $data["password"],
        );

        $create_user->execute($user_input);

        return back()->with("success", "Usuario Cadastrado.");
    }
}
