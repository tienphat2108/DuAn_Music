<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        DB::table('charts')->truncate();

        // Create charts
        DB::table('charts')->insert([
            [
                'name' => 'Top Bài Hát',
                'description' => 'Những bài hát hot nhất hiện nay',
                'image_path' => null,
                'background_color' => '#e91e63',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Top Nghệ Sĩ',
                'description' => 'Nghệ sĩ có lượt nghe cao nhất',
                'image_path' => null,
                'background_color' => '#00bcd4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Top Nghệ Sĩ USUK',
                'description' => 'Nghệ sĩ có lượt nghe cao nhất ở US và UK',
                'image_path' => null,
                'background_color' => '#00bcd4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Top Nghệ Sĩ VPOP',
                'description' => 'Nghệ sĩ có lượt nghe cao nhất ở Việt Nam',
                'image_path' => null,
                'background_color' => '#00bcd4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Top Nghệ Sĩ JPOP',
                'description' => 'Nghệ sĩ có lượt nghe cao nhất ở Nhật Bản',
                'image_path' => null,
                'background_color' => '#00bcd4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Top Nghệ Sĩ KPOP',
                'description' => 'Nghệ sĩ có lượt nghe cao nhất ở Hàn Quốc',
                'image_path' => null,
                'background_color' => '#00bcd4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
