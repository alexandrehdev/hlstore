<?php
namespace App\UseCase\Register;
use App\UseCase\Register\Input;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UseCase{

    public function execute(Input $input) 
    {
        $user = new User();
        $user->name = $input->username;
        $user->email = $input->email;
        $user->password = Hash::make($input->password);
        $user->save();
    }
}