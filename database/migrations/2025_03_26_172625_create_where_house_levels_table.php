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
        Schema::create('where_house_levels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("level_number");
            $table->unsignedBigInteger("price");
            $table->unsignedBigInteger("max_amount");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('where_house_levels');
    }
};
