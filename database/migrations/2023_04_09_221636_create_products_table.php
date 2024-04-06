<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("type");
            $table->string("subtype");
            $table->string("price");
            $table->string("brand");
            $table->enum("visibility",["public","private"]);
            $table->string("color");
            $table->string("condition");
            $table->string("gender");
            $table->string("size");
            $table->string("description");
            $table->string("user_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
