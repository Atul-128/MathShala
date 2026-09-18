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
            $table->string('gender')->nullable()->after('age');
            $table->string('math_marks')->nullable()->after('principal_name');
            $table->string('overall_marks')->nullable()->after('math_marks');
            $table->string('school_id_card')->nullable()->after('overall_marks');
            $table->string('report_card')->nullable()->after('school_id_card');
            
            // Father Details
            $table->string('father_name')->nullable()->after('report_card');
            $table->string('father_qualification')->nullable()->after('father_name');
            $table->string('father_occupation')->nullable()->after('father_qualification');
            $table->string('father_contact')->nullable()->after('father_occupation');
            $table->text('father_address')->nullable()->after('father_contact');
            
            // Mother Details
            $table->string('mother_name')->nullable()->after('father_address');
            $table->string('mother_qualification')->nullable()->after('mother_name');
            $table->string('mother_occupation')->nullable()->after('mother_qualification');
            $table->string('mother_contact')->nullable()->after('mother_occupation');
            $table->text('mother_address')->nullable()->after('mother_contact');
            
            // Local Guardian
            $table->text('local_guardian_details')->nullable()->after('mother_address');
            
            // Observations & Others
            $table->text('obs_math')->nullable()->after('local_guardian_details');
            $table->text('obs_other')->nullable()->after('obs_math');
            $table->text('obs_overall')->nullable()->after('obs_other');
            $table->text('why_mathshala')->nullable()->after('obs_overall');
            $table->text('key_expectations')->nullable()->after('why_mathshala');
            $table->text('precautions')->nullable()->after('key_expectations');
            $table->text('other_requests')->nullable()->after('precautions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('enrollments', function (Blueprint $table) {
            $table->dropColumn([
                'gender', 'math_marks', 'overall_marks', 'school_id_card', 'report_card',
                'father_name', 'father_qualification', 'father_occupation', 'father_contact', 'father_address',
                'mother_name', 'mother_qualification', 'mother_occupation', 'mother_contact', 'mother_address',
                'local_guardian_details', 'obs_math', 'obs_other', 'obs_overall',
                'why_mathshala', 'key_expectations', 'precautions', 'other_requests'
            ]);
        });
    }
};
