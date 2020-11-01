<?php

use Illuminate\Database\Seeder;
use App\City;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $cities = array( 'Abhā','Abqaiq',  'Al-Baḥah',    'Al-Dammām',     'Al-Hufūf',    'Al-Jawf',   'Al-Kharj',    'Al-Khubar',     'Al-Qaṭīf',    'Al-Ṭaʾif',    'ʿArʿar',  'Buraydah',    'Dhahran',   'Ḥāʾil', 'Jiddah',  'Jīzān', 'Khamīs Mushayt',          'King Khalīd Military City',
                    'Mecca', 'Medina',  'Najrān',  'Ras Tanura',      'Riyadh',  'Sakākā',  'Tabūk', 'Yanbuʿ');
          for ($i=0; $i < count($cities) ; $i++) { 
            City::insert([
                'city' => $cities[$i],
            ]);
          }
    }
}
