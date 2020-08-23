<?php

use Illuminate\Database\Seeder;
use App\JobProfile;
use Faker\Factory as Faker;

class Job_ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        for($i=0;$i<=3;$i++){

        $profile=JobProfile::create([
             
           'description'=>$faker-> realText,
        
        ]);
    }
}
}