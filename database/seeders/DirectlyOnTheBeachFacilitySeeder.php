<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facility;
use App\Models\Hotel;

class DirectlyOnTheBeachFacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $beach = Facility::create([
            'name' => 'Directly on the beach',
            'type' => 'Hotel',
            'status' => '1',
        ]);

        $hotels = Hotel::get();

        foreach($hotels as $hotel)
        {
            $number = random_int ( 1 , 10 );
            $hotel->facilities()->attach([$beach->id => ['number' => $number]]);
        }
        
    }
}
