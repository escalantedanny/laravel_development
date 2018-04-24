<?php

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Skill::class, 20)->create();
    }
}
