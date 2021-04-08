<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autos')->insert([
            'marca' => 'Toyota',
            'modelo' => '1999',
        ]);
    }
}
