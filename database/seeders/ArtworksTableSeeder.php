<?php

namespace Database\Seeders;

use App\Models\Artwork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artwork_data = config('db.artworks');

        foreach ($artwork_data as $artwork) {
            $new_artwork = new Artwork();
            $new_artwork->artist_id = $artwork['artist_id'];
            $new_artwork->museum_id = $artwork['museum_id'];
            $new_artwork->name = $artwork['name'];
            $new_artwork->year = $artwork['year'];
            $new_artwork->save();
        }
    }
}
