<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
   use RefreshDatabase;
    public function test_user_table_has_admin_owner_and_client(): void
    {
        $this->seed();

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
        
        $this->post("/cadastro/cadastrar",[
            "name" => "tchurusbango",
            "email" => "tchurusbango@gmail.com",
            "password" => Hash::make("123"),
            "password_confirmation" => Hash::make("123"),
        ])->assertRedirect("/");
    }
}
