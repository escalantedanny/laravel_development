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
        $this->call(professionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SkilSeeder::class);
    }
}
