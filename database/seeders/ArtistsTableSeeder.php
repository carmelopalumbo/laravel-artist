<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists = config('db.artists');

        foreach ($artists as $artist) {
            $new_artist = new Artist();
            $new_artist->name = $artist['name'];
            $new_artist->save();
        }
    }
}
