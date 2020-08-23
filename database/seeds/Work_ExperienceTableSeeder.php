<?php

use Illuminate\Database\Seeder;
use App\WorkExperience;
use Faker\Factory as Faker;


class Work_ExperienceTableSeeder extends Seeder
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

        $experience=WorkExperience::create([
             
           'start_date'=>$faker-> dateTime,
           'ending_date'=>$faker-> dateTimeAD,
           'activities'=>$faker-> realText,
           'business'=>$faker-> company,
        
        ]); 
    }
}
}