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
                'category' => 'Foundation Course',
                'venue' => 'Offline / Online',
                'time' => 'Morning / Evening',
                'date' => '28th May, 2026',
                'fee' => 'Rs. 60,000',
            ],
            [
                'category' => 'Foundation Course',
                'venue' => 'Offline / Online',
                'time' => 'Morning / Evening',
                'date' => '15th June, 2026',
                'fee' => 'Rs. 60,000',
            ],
            [
                'category' => 'Foundation Course',
                'venue' => 'Offline / Online',
                'time' => 'Morning / Evening',
                'date' => '2nd July, 2026',
                'fee' => 'Rs. 60,000',
            ],
            [
                'category' => 'Foundation Course',
                'venue' => 'Offline / Online',
                'time' => 'Morning / Evening',
                'date' => '20th July, 2026',
                'fee' => 'Rs. 60,000',
            ],
            // Weekend batch for professional
            [
                'category' => 'Weekend Batch',
                'venue' => 'For Professionals',
                'time' => 'Weekends',
                'date' => '7th June, 2026',
                'fee' => 'Contact Us',
            ],
            // Test series
            [
                'category' => 'Test Series',
                'venue' => 'Mains 2026 (14 Tests)',
                'time' => 'Flexible',
                'date' => '7th June, 2026',
                'fee' => 'Rs. 15,000',
            ],
            [
                'category' => 'Test Series',
                'venue' => 'Year Long (20 Tests)',
                'time' => 'Flexible',
                'date' => '15th June, 2026',
                'fee' => 'Rs. 30,000',
            ],
            // Crash course for maths
            [
                'category' => 'Optional Subject',
                'venue' => 'Maths Mains 2026 (50 classes+10 test)',
                'time' => 'TBD',
                'date' => '2nd June, 2026',
                'fee' => 'Contact Us',
            ],
            // CSAT Foundation
            [
                'category' => 'CSAT',
                'venue' => 'Duration: 6 Months',
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
