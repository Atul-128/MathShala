<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'site_name', 'value' => 'The Vision Classes', 'group' => 'general'],
            ['key' => 'contact_email', 'value' => 'info@thevisionclasses.com', 'group' => 'general'],
            ['key' => 'contact_phone', 'value' => '+91 98765 43210', 'group' => 'general'],
            ['key' => 'contact_address', 'value' => 'Mukherjee Nagar, Delhi, 110009', 'group' => 'general'],
            ['key' => 'facebook_url', 'value' => 'https://facebook.com', 'group' => 'general'],
            ['key' => 'instagram_url', 'value' => 'https://instagram.com', 'group' => 'general'],
            ['key' => 'youtube_url', 'value' => 'https://youtube.com', 'group' => 'general'],
            ['key' => 'twitter_url', 'value' => 'https://twitter.com', 'group' => 'general'],
        ];

        foreach ($settings as $setting) {
            \App\Models\Setting::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value'], 'group' => $setting['group']]
            );
        }
    }
}
