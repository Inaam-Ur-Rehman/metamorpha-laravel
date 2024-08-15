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
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            // create menu for frontend with children
            // Home -> About -> Contact -> Services -> Services 1 -> Services 2 -> Services 3
            $table->string('name');
            $table->string('slug')->unique();
            $table->boolean('has_child')->default(false);
            // child of this menu
            $table->json('children')->nullable();
            $table->boolean('disabled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headers');
    }
};
