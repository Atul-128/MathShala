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
        Schema::table('batches', function (Blueprint $table) {
            $table->dropColumn(['category', 'venue']);
            $table->foreignId('course_id')->nullable()->after('id')->constrained('courses')->onDelete('cascade');
            $table->string('mode')->after('course_id')->nullable();
            $table->string('duration')->after('time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('batches', function (Blueprint $table) {
            $table->dropForeign(['course_id']);
            $table->dropColumn(['course_id', 'mode', 'duration']);
            $table->string('category')->nullable();
            $table->string('venue')->nullable();
        });
    }
};
