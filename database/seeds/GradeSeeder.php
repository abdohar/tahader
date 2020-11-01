<?php

use Illuminate\Database\Seeder;
use App\Grade;
class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grades = array('Kg1', 'Kg2' , 'Kg3' , 'Kg4' ,'First Grade ','Second Grade ','Third Grade ','Fourth Grade ','Fifth Grade ','VI Grade ','Seventh Grade ','VIII Grade ','Ninth Grade ','The tenth','Eleventh Grade ','Bachelor Grad ');
        for ($i=0; $i < count($grades) ; $i++) { 
            Grade::insert([
                'name' => $grades[$i],
                'note' => 'this is '.$grades[$i]
            ]);
          }
    }
}
