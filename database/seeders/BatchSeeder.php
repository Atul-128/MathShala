<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('batches')->truncate();
        
        $batches = [
            // Foundation course
            [
                'course_id' => 1,
                'mode' => 'Both',
                'duration' => '1 Year',
                'time' => 'Morning / Evening',
                'date' => '28th May, 2026',
                'fee' => 'Rs. 60,000',
            ],
            [
                'course_id' => 1,
                'mode' => 'Both',
                'duration' => '1 Year',
                'time' => 'Morning / Evening',
                'date' => '15th June, 2026',
                'fee' => 'Rs. 60,000',
            ],
            [
                'course_id' => 1,
                'mode' => 'Both',
                'duration' => '1 Year',
                'time' => 'Morning / Evening',
                'date' => '2nd July, 2026',
                'fee' => 'Rs. 60,000',
            ],
            [
                'course_id' => 1,
                'mode' => 'Both',
                'duration' => '1 Year',
                'time' => 'Morning / Evening',
                'date' => '20th July, 2026',
                'fee' => 'Rs. 60,000',
            ],
            // Weekend batch for professional
            [
                'course_id' => 2,
                'mode' => 'Online',
                'duration' => '6 Months',
                'time' => 'Weekends',
                'date' => '7th June, 2026',
                'fee' => 'Contact Us',
            ],
            // Test series
            [
                'course_id' => 3,
                'mode' => 'Online',
                'duration' => '3 Months',
                'time' => 'Flexible',
                'date' => '7th June, 2026',
                'fee' => 'Rs. 15,000',
            ],
            [
                'course_id' => 3,
                'mode' => 'Online',
                'duration' => '1 Year',
                'time' => 'Flexible',
                'date' => '15th June, 2026',
                'fee' => 'Rs. 30,000',
            ],
            // Crash course for maths
            [
                'course_id' => 2,
                'mode' => 'Offline',
                'duration' => '3 Months',
                'time' => 'TBD',
                'date' => '2nd June, 2026',
                'fee' => 'Contact Us',
            ],
            // CSAT Foundation
            [
                'course_id' => 3,
                'mode' => 'Both',
                'duration' => '6 Months',
                'time' => 'TBD',
                'date' => '1st June, 2026',
                'fee' => 'Rs. 15,000',
            ]
        ];

        foreach ($batches as $batch) {
            \App\Models\Batch::create($batch);
        }

        // Settings for Batch Section
        $settings = [
            ['key' => 'batch_main_title', 'value' => 'Upcoming 2026 Batches', 'group' => 'batch'],
            ['key' => 'batch_sub_title', 'value' => 'Foundation, Test Series & CSAT', 'group' => 'batch'],
            ['key' => 'batch_description', 'value' => 'Enroll now to secure your seat for the upcoming sessions', 'group' => 'batch'],
        ];

        foreach ($settings as $setting) {
            \App\Models\Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
