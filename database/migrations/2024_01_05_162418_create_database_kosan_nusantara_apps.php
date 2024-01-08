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
        Schema::create('boarding', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->integer('room_numbers')->nullable();
            $table->integer('floor')->default(1);
            $table->text('description')->nullable();
            $table->integer('price')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });

        Schema::create('boarding_facility', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('boarding_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });

        Schema::create('gallery', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('boarding_id')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boarding');
        Schema::dropIfExists('boarding_facility');
        Schema::dropIfExists('gallery');
    }
};
