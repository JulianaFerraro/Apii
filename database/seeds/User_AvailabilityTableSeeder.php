<?php

use Illuminate\Database\Seeder;
use App\UserAvailability;

class User_AvailabilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $availability=UserAvailability::create([
            'status' => 'disponible'
            
        ]);
        $availability=UserAvailability::create([
            'status' => 'no disponible'
            ]);
    }
}
