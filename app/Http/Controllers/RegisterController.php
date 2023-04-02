<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\UseCase\Register\UseCase as CreateUser;
use App\UseCase\Register\Input as UserInput;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(RegisterRequest $request, CreateUser $create_user) :RedirectResponse
    {
        $user_input = new UserInput(
            $request->validated()["username"],
            $request->validated()["email"],
            $request->validated()["password"],
        );

        $create_user->execute($user_input);

        return back()->with("success", "Usuario Cadastrado com Sucesso");
    }
}
