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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            // Basic Info
            $table->string('title');                 // Course Title
            $table->string('category');              // UPSC / JEE / etc
            $table->integer('price');                // Price

            // Optional Fields
            $table->string('duration')->nullable();  // 6 months etc
            $table->string('mode')->nullable();      // online/offline
            $table->string('status')->default('active'); // active/draft

            // Content
            $table->text('description')->nullable(); 

            // Image
            $table->string('image')->nullable();     // Thumbnail

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
