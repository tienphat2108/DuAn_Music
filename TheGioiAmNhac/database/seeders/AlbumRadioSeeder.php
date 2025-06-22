<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumRadioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        DB::table('albums')->truncate();
        DB::table('radios')->truncate();

        // Get some artist IDs for albums
        $artistIds = DB::table('artists')->pluck('id')->toArray();

        // Create albums
        DB::table('albums')->insert([
            [
                'name' => 'Believer',
                'artist_id' => $artistIds[0] ?? 1,
                'image_path' => 'images/believerID.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Nights',
                'artist_id' => $artistIds[1] ?? 1,
                'image_path' => 'images/thenightsAV.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Freeze',
                'artist_id' => $artistIds[2] ?? 1,
                'image_path' => 'images/freezekygo.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Create radios
        DB::table('radios')->insert([
            [
                'name' => 'Imagine Dragons',
                'description' => 'Mô tả radio 1',
                'image_path' => 'images/believerID.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Avicii',
                'description' => 'Mô tả radio 2',
                'image_path' => 'images/thenightsAV.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kygo',
                'description' => 'Mô tả radio 3',
                'image_path' => 'images/freezekygo.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Martin Garrix',
                'description' => 'Mô tả radio 4',
                'image_path' => 'images/animalsMG.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'One Republic',
                'description' => 'Mô tả radio 5',
                'image_path' => 'images/countingstarsOR.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
