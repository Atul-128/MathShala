<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Facades\File;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'title' => 'UPSC GS Foundation Course',
                'category' => 'upsc',
                'price' => 45000,
                'badge' => 'BEST SELLER',
                'duration' => '12 Months',
                'mode' => 'offline',
                'status' => 'active',
                'description' => 'Comprehensive coverage of Prelims and Mains syllabus with expert faculty, answer writing, and rigorous test series.',
                'image_url' => 'https://images.unsplash.com/photo-1546410531-bea5aadcb6ce?w=800&h=600&fit=crop',
                'filename' => 'upsc_gs.jpg'
            ],
            [
                'title' => 'Mathematics Optional',
                'category' => 'optional',
                'price' => 30000,
                'badge' => 'TRENDING',
                'duration' => '6 Months',
                'mode' => 'hybrid',
                'status' => 'active',
                'description' => 'Advance your scoring potential with our structured Mathematics optional coaching covering both theoretical papers.',
                'image_url' => 'https://images.unsplash.com/photo-1635070041078-e363dbe005cb?w=800&h=600&fit=crop',
                'filename' => 'math_opt.jpg'
            ],
            [
                'title' => 'CSAT Masterclass',
                'category' => 'test',
                'price' => 15000,
                'badge' => 'NEW BATCH',
                'duration' => '3 Months',
                'mode' => 'online',
                'status' => 'active',
                'description' => 'Conquer the CSAT hurdle with intensive problem-solving sessions, logic tricks, and past paper analysis.',
                'image_url' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=800&h=600&fit=crop',
                'filename' => 'csat.jpg'
            ]
        ];

        $uploadPath = public_path('uploads/courses');
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true);
        }

        foreach ($courses as $c) {
            // Download image
            try {
                $imageContent = @file_get_contents($c['image_url']);
                if ($imageContent) {
                    File::put($uploadPath . '/' . $c['filename'], $imageContent);
                }
            } catch (\Exception $e) {}

            Course::updateOrCreate(
                ['title' => $c['title']],
                [
                    'category' => $c['category'],
                    'price' => $c['price'],
                    'badge' => $c['badge'],
                    'duration' => $c['duration'],
                    'mode' => $c['mode'],
                    'status' => $c['status'],
                    'description' => $c['description'],
                    'image' => $c['filename']
                ]
            );
        }
    }
}
