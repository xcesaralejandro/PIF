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
        // $this->call(UsersTableSeeder::class);
        $this->call(regionessSeeder::class);
        $this->call(usersSeeder::class);
        $this->call(alimentosSeeder::class);
    }
}
