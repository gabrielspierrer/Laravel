<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
		for ($i=0; $i < 50; $i++) {
    		\DB::table('autos')->insert(array(
           			'marca' => $faker->word,
           			'modelo' => $faker->randomDigit
    		));
		}
    }
}
