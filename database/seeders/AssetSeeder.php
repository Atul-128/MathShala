<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assets = [
            // Home Page
            [
                'key' => 'home_math_strategy_image',
                'label' => 'Home - Mathematics Strategy',
                'value' => 'https://images.unsplash.com/photo-1635070041078-e363dbe005cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'group' => 'home'
            ],
            [
                'key' => 'home_campus_image',
                'label' => 'Home - Campus Feature',
                'value' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                'group' => 'home'
            ],
            [
                'key' => 'home_library_image',
                'label' => 'Home - Library Feature',
                'value' => 'https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'group' => 'home'
            ],
            [
                'key' => 'home_peer_study_image',
                'label' => 'Home - Peer Study Feature',
                'value' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'group' => 'home'
            ],
            // About Page
            [
                'key' => 'about_hero_banner',
                'label' => 'About - Hero Banner',
                'value' => 'https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80',
                'group' => 'about'
            ],
            [
                'key' => 'about_study_env_image',
                'label' => 'About - Study Environment',
                'value' => 'https://images.unsplash.com/photo-1524178232363-1fb28f74b0cd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                'group' => 'about'
            ],
            [
                'key' => 'about_learning_feature_image',
                'label' => 'About - Learning Feature',
                'value' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                'group' => 'about'
            ],
            // Contact Page
            [
                'key' => 'contact_hero_banner',
                'label' => 'Contact - Hero Banner',
                'value' => 'https://images.unsplash.com/photo-1423666639041-f56000c27a9a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80',
                'group' => 'contact'
            ],
            // Course Pages
            [
                'key' => 'course_upsc_hero_banner',
                'label' => 'Course - UPSC Hero Banner',
                'value' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80',
                'group' => 'course'
            ],
            [
                'key' => 'course_upsc_success_image',
                'label' => 'Course - UPSC Success Feature',
                'value' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                'group' => 'course'
            ],
            [
                'key' => 'course_neet_student_image',
                'label' => 'Course - NEET Student Feature',
                'value' => 'https://images.unsplash.com/photo-1576089172869-4f5f6f315620?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                'group' => 'course'
            ],
            [
                'key' => 'course_maths_hero_banner',
                'label' => 'Course - Maths Hero (Overlay)',
                'value' => 'https://images.unsplash.com/photo-1509228468518-180dd4864904?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80',
                'group' => 'course'
            ],
            [
                'key' => 'course_maths_methodology_image',
                'label' => 'Course - Maths Methodology Bg',
                'value' => 'https://images.unsplash.com/photo-1635070041078-e363dbe005cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                'group' => 'course'
            ]
        ];

        foreach ($assets as $asset) {
            \App\Models\Setting::updateOrCreate(['key' => $asset['key']], $asset);
        }
    }
}
