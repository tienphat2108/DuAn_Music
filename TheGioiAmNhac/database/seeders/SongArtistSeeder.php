<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data to prevent duplicates on re-seeding
        DB::table('songs')->truncate();
        DB::table('artists')->truncate();
        DB::table('artist_song')->truncate();

        // ARTISTS
        $aviciiId = DB::table('artists')->insertGetId([
            'name' => 'Avicii',
            'image_path' => 'images/avicii.jpg',
            'description' => 'Tim Bergling (2. 9. 1989 – 20. 4. 2018), được biết đến với nghệ danh Avicii, là một DJ, nhà sản xuất thu âm và nhạc sĩ người Thụy Điển. Anh nổi tiếng với những bản hit như "Levels", "Wake Me Up" và "Hey Brother".'
        ]);

        $imagineDragonsId = DB::table('artists')->insertGetId([
            'name' => 'Imagine Dragons',
            'image_path' => 'images/ImagineDragons.jpg',
            'description' => 'Imagine Dragons là một ban nhạc pop rock người Mỹ đến từ Las Vegas, Nevada, bao gồm ca sĩ chính Dan Reynolds, tay guitar Wayne Sermon, tay bass Ben McKee và tay trống Daniel Platzman.'
        ]);

        $kygoId = DB::table('artists')->insertGetId([
            'name' => 'Kygo',
            'image_path' => 'images/Kygo.jpg',
            'description' => 'Kyrre Gørvell-Dahll (11. 9. 1991), hay còn được biết đến với nghệ danh Kygo, là một DJ, nhạc sĩ và nhà sản xuất thu âm người Na Uy. Anh được biết đến với dòng nhạc tropical house.'
        ]);

        $martinGarrixId = DB::table('artists')->insertGetId([
            'name' => 'Martin Garrix',
            'image_path' => 'images/animalsMG.jpg',
            'description' => 'Martijn Gerard Garritsen (14. 5. 1996), được biết đến với nghệ danh Martin Garrix, là một DJ, nhạc sĩ và nhà sản xuất người Hà Lan.'
        ]);

        $oneRepublicId = DB::table('artists')->insertGetId([
            'name' => 'OneRepublic',
            'image_path' => 'images/OneRepublic.jpg',
            'description' => 'OneRepublic là một ban nhạc pop rock người Mỹ được thành lập tại Colorado Springs, Colorado vào năm 2002. Ban nhạc bao gồm Ryan Tedder, Zach Filkins, Drew Brown, Brent Kutzle, và Eddie Fisher.'
        ]);

        $theChainsmokersId = DB::table('artists')->insertGetId([
            'name' => 'The Chainsmokers',
            'image_path' => 'images/TheChainsmokers.jpg',
            'description' => 'The Chainsmokers là một bộ đôi DJ và sản xuất nhạc điện tử người Mỹ bao gồm Alexander "Alex" Pall và Andrew "Drew" Taggart. Họ đã đạt được thành công đột phá với các bản hit như "#Selfie" và "Closer".'
        ]);

        $zeddId = DB::table('artists')->insertGetId([
            'name' => 'Zedd',
            'image_path' => 'images/Zedd.jpg',
            'description' => 'Anton Zaslavski (2. 9. 1989), được biết đến với nghệ danh Zedd, là một nhà sản xuất thu âm, DJ và nhạc sĩ người Đức gốc Nga. Anh được biết đến với các bài hát như "Clarity", "Stay" và "The Middle".'
        ]);

        // SONGS
        DB::table('songs')->insert([
            [
                'name' => 'The Nights',
                'artist_id' => $aviciiId,
                'image_path' => 'images/thenightsAV.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Believer',
                'artist_id' => $imagineDragonsId,
                'image_path' => 'images/believerID.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Freeze',
                'artist_id' => $kygoId,
                'image_path' => 'images/freezekygo.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Animals',
                'artist_id' => $martinGarrixId,
                'image_path' => 'images/animalsMG.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Counting Stars',
                'artist_id' => $oneRepublicId,
                'image_path' => 'images/countingstarsOR.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Closer',
                'artist_id' => $theChainsmokersId,
                'image_path' => 'images/closerTC.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beautiful Now',
                'artist_id' => $zeddId,
                'image_path' => 'images/beautifulnowZedd.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
