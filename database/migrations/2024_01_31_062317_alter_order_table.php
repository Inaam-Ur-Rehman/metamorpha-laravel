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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('paid_at')->after('order_id');
            $table->string('transaction_id')->after('paid_at');
            $table->string('payment_method')->after('transaction_id');
            $table->string('payment_status')->after('payment_method');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('paid_at');
            $table->dropColumn('transaction_id');
            $table->dropColumn('payment_method');
            $table->dropColumn('payment_status');
        });
    }
};
