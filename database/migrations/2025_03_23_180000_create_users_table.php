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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("telegram_id");
           
            $table->string('name');
            $table->string('username')->unique();

            $table->unsignedBigInteger("where_house_amount");

            $table->foreignId("where_house_id")
            ->constrained("where_house_levels")
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->enum("status", ["active","banned"])->default("active");
            
            $table->uuid("reffral_code");

            $table->unsignedBigInteger("wallet_amount");


            $table->uuid("avatar_id");
            
            $table->foreignId("wallet_id")
            ->references("id")
            ->on("avatars")
            ->onDelete("cascade")
            ->onUpdate("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
