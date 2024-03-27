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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('subTitle');
            $table->text('excerpt');
            $table->text('thumbnail');
            $table->date('startDate');
            $table->date('endDate');
            // optional fields
            $table->text('video')->nullable();
            $table->text('bannerImage')->nullable();
            $table->longText('bannerText')->nullable();
            $table->longText('description')->nullable();
            // active or not
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
