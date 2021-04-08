<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
		    for ($i=0; $i < 99; $i++) {
    		  \DB::table('motos')->insert(array(
           		'marca' => $faker->word,
           		'modelo' => $faker->randomDigit,
           		'color' => $faker->colorName
    		  ));
		    }
    }
}
