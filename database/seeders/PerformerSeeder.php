<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Performer;
use Illuminate\Support\Facades\File;

class PerformerSeeder extends Seeder
{
    public function run(): void
    {
        $performers = [
            [
                'name' => 'Rahul M.',
                'rank' => 'AIR 45',
                'year' => 'CSE 2023',
                'status' => 'active',
                'order' => 1,
                'image_url' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop',
                'filename' => 'rahul.jpg'
            ],
            [
                'name' => 'Priya K.',
                'rank' => 'AIR 92',
                'year' => 'CSE 2022',
                'status' => 'active',
                'order' => 2,
                'image_url' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=400&fit=crop',
                'filename' => 'priya.jpg'
            ],
            [
                'name' => 'Vikram J.',
                'rank' => 'AIR 104',
                'year' => 'CSE 2023',
                'status' => 'active',
                'order' => 3,
                'image_url' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&h=400&fit=crop',
                'filename' => 'vikram.jpg'
            ],
            [
                'name' => 'Sneha R.',
                'rank' => 'AIR 12',
                'year' => 'CSE 2021',
                'status' => 'active',
                'order' => 4,
                'image_url' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400&h=400&fit=crop',
                'filename' => 'sneha.jpg'
            ],
             [
                'name' => 'Amit S.',
                'rank' => 'AIR 156',
                'year' => 'CSE 2023',
                'status' => 'active',
                'order' => 5,
                'image_url' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop',
                'filename' => 'amit.jpg'
            ]
        ];

        $uploadPath = public_path('uploads/performers');
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true);
        }

        foreach ($performers as $p) {
            // Download image
            try {
                $imageContent = @file_get_contents($p['image_url']);
                if ($imageContent) {
                    File::put($uploadPath . '/' . $p['filename'], $imageContent);
                }
            } catch (\Exception $e) {}

            Performer::updateOrCreate(
                ['name' => $p['name']],
                [
                    'rank' => $p['rank'],
                    'year' => $p['year'],
                    'status' => $p['status'],
                    'order' => $p['order'],
                    'image' => $p['filename']
                ]
            );
        }
    }
}
