<?php

namespace Database\Seeders;

use App\Models\Museum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MuseumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_museums = config('db.museums');

        foreach($array_museums as $museum){
            $new_museum = new Museum();
            $new_museum->name = $museum['name'];
            $new_museum->slug = Museum::generateSlug($new_museum->name);
            $new_museum->nation = $museum['nation'];
            $new_museum->save();
        }

    }
}
