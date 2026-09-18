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
        Schema::table('enrollments', function (Blueprint $table) {
            $table->enum('enrollment_type', ['demo', 'class'])->default('class');
            $table->decimal('amount', 8, 2)->nullable();
            $table->string('payment_id')->nullable();
            $table->enum('payment_status', ['pending', 'completed', 'failed'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('enrollments', function (Blueprint $table) {
            $table->dropColumn(['enrollment_type', 'amount', 'payment_id', 'payment_status']);
        });
    }
};
