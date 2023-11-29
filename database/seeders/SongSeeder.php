<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;
 
 
class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed a few songs
        Song::create([
            'sr' => '1',
            'artist' => 'Eminem',
            'title' => 'Stan',
            'album' => 'The Marshall Mathers LP',
            'duration' => '6:44',
        ]);

        Song::create([
        'sr' => '2',
            'artist' => 'A P Dhillon',
            'title' => 'With You',
            'album' => 'The Marshall Mathers LP',
            'duration' => '6:44',
        ]);
        Song::create([
            'sr' => '3',
                'artist' => 'Metallica',
                'title' => 'Nothing Else Matters',
                'album' => 'The Marshall Mathers LP',
                'duration' => '3:44',
            ]);
    }
}
