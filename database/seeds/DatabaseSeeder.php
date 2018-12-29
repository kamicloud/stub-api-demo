<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ArticlesSeeder::class);
        $this->call(WebsiteLayoutsSeeder::class);
        $this->call(ReversionIgnoresSeeder::class);
        $this->call(TruckSeeder::class);
    }
}
