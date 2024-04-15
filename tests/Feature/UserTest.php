<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\UseCase\Register\Input as UserInput;
use Illuminate\Foundation\Testing\WithFaker;
use App\UseCase\Register\UseCase as CreateUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\UseCase\Login\Input as UserData;
use App\UseCase\Login\UseCase as AuthUser;
use Database\Seeders\AdministratorSeeder;
use Database\Seeders\OwnerSeeder;
use Database\Seeders\ClientSeeder;

class UserTest extends TestCase
{
   use RefreshDatabase, WithoutMiddleware;

    public function test_user_table_has_admin_owner_and_client(): void
    {
        $counting_of_users = User::count();

        if($counting_of_users == 0){
            $this->artisan("db:seed --env=testing");
        }

        $this->assertDatabaseHas("users",[
            "email" => "alexandrehldev@gmail.com"
        ]);

        $this->assertDatabaseHas("users",[
            "email" => "dono@gmail.com"
        ]);

        $this->assertDatabaseHas("users",[
            "email" => "cliente@gmail.com"
        ]);
    }

    public function test_user_can_create_account() : void
    {
        $email = fake()->email();
        $password = Hash::make("4321");
        $password_confirmation = $password;
        
        $userData = [
            "name" => fake()->name(),
            "email" => $email,
            "password" => $password,
            "password_confirmation" => $password_confirmation
        ];

        $response = $this->post("cadastro/cadastrar",$userData);
        
        $response->assertRedirect("/");

        $this->assertDatabaseHas("users",["email" => $email]);
    }


    public function test_user_can_login() : void
    {
        $user = User::factory()->create(["password" => Hash::make("123")]);
        
        $response = Auth::attempt(["email"=> $user->email,"password"=> "123"]);

        $this->assertTrue($response);

    }
}
