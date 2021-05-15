<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AutoSeeder::class);
        $this->call(MotoSeeder::class);
        $this->call(PizzaSeeder::class);
        $this->call(ProductoSeeder::class);
    }
}
