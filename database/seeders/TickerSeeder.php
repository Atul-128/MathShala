<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TickerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Ticker::create([
            'message' => 'New UPSC GS Foundation Batch starting May 14th • Admissions Open for 2026-27 Session • Scholarship Test this Sunday • Limited Seats available for Math Optional •',
            'status' => 'active'
        ]);
    }
}
