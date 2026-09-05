<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;
use Illuminate\Support\Facades\File;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Divyanshu Choudhary',
                'rank' => 'AIR 30',
                'year' => 'CSE 2020',
                'quote' => 'Hello everyone. I am Divyanshu Choudhary and I have secured AIR 30 in UPSC CSE 2020. I am grateful to Mahitosh Maheep Sir and The Vision Classes team for making me realise my dream.',
                'image_url' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop',
                'filename' => 'divyanshu.jpg'
            ],
            [
                'name' => 'Preetam Kumar',
                'rank' => 'AIR 9',
                'year' => 'CSE 2021',
                'quote' => 'My name is Preetam Kumar and I secured AIR-9 this year in UPSC CSE-21. Questions in the test series were from diverse areas and new, providing opportunity to think and solve instantly.',
                'image_url' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400&h=400&fit=crop',
                'filename' => 'preetam.jpg'
            ],
            [
                'name' => 'Arpit Gupta',
                'rank' => 'AIR 54',
                'year' => 'CSE 2021',
                'quote' => "I had joined The Vision Classes's test series for 2021 Maths (Mains). It was really helpful & the surprising questions in paper made me habitual of UPSC papers. Sir was really supportive.",
                'image_url' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=400&fit=crop',
                'filename' => 'arpit.jpg'
            ]
        ];

        $uploadPath = public_path('uploads/testimonials');
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true);
        }

        foreach ($testimonials as $t) {
            // Download image
            try {
                $imageContent = file_get_contents($t['image_url']);
                if ($imageContent) {
                    File::put($uploadPath . '/' . $t['filename'], $imageContent);
                }
            } catch (\Exception $e) {
                // Skip if download fails
            }

            Testimonial::updateOrCreate(
                ['name' => $t['name']],
                [
                    'rank' => $t['rank'],
                    'year' => $t['year'],
                    'quote' => $t['quote'],
                    'image' => $t['filename'],
                    'status' => 'active',
                    'order' => 0
                ]
            );
        }
    }
}
