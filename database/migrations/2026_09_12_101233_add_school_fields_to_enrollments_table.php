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
            $table->string('school_name')->nullable()->after('name');
            $table->string('principal_name')->nullable()->after('school_name');
            // Make name nullable since school form doesn't use it, or we can just pass school name as name in the controller, but better to keep it clean.
            $table->string('name')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('enrollments', function (Blueprint $table) {
            $table->dropColumn(['school_name', 'principal_name']);
            $table->string('name')->nullable(false)->change();
        });
    }
};
