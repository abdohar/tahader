<?php

use Illuminate\Database\Seeder;
use App\Track;
class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tracks = array('International', 'Public School' , 'Decisions');
        $track_name = ['international-عالمي', 'public-school-عام','Decisions-مقررات'];
        for ($i=0; $i < count($tracks) ; $i++) { 
            Track::insert([
                'track' => $tracks[$i],
                'track_name' =>  $track_name[$i]
            ]);
        }
    }
}
