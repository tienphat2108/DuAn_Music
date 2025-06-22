<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuggestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        DB::table('suggestions')->truncate();

        // Create suggestions
        DB::table('suggestions')->insert([
            [
                'name' => 'Beliver',
                'description' => 'Mô tả gợi ý 1',
                'image_path' => 'images/believerID.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Nights',
                'description' => 'Mô tả gợi ý 2',
                'image_path' => 'images/thenightsAV.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Closer',
                'description' => 'Mô tả gợi ý 3',
                'image_path' => 'images/closerTC.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Counting Stars',
                'description' => 'Mô tả gợi ý 4',
                'image_path' => 'images/countingstarsOR.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Freeze',
                'description' => 'Mô tả gợi ý 6',
                'image_path' => 'images/freezekygo.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beautiful Now',
                'description' => 'Mô tả gợi ý 7',
                'image_path' => 'images/beautifulnowZedd.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
