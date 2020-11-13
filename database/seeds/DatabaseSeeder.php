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
        $this->call(UserSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(VisimisiSeeder::class);
        $this->call(FooterSeeder::class);
    }
}
