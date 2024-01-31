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
        // drop persona column
        Schema::table('downloads', function (Blueprint $table) {
            $table->dropColumn('persona');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // add persona column
        Schema::table('downloads', function (Blueprint $table) {
            $table->string('persona')->nullable();
        });
    }
};
