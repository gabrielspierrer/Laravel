<?php

use Illuminate\Database\Seeder;
use App\Moto;

class MotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Moto::class, 99)->create();
    }
}
