<?php

use Illuminate\Database\Seeder;
use App\AcademicTitles;
use Faker\Factory as Faker;

class Academic_TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i<=5; $i++){

            $Trabajador=AcademicTitles::create([
                'title'=> $faker-> bs,
                'university'=> $faker-> catchPhrase,               
            ]);
            }
    }
}
