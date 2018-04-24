<?php

use App\Models\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;   

class professionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        //=========================================================================
        // estas se hacen utilizando el modelo seeder sin cargarlos de ningun model
        //=========================================================================


        // DB::insert('INSERT INTO profession (name) VALUES (:name)',['name' => 'Desarrollador QA']);

        // DB::table('profession')->insert([
        //     'name' => 'Administrador Web',
        // ]);

        // DB::table('profession')->insert([
        //     'name' => 'Front-end Developer',
        // ]);

        // DB::table('profession')->insert([
        //     'name' => 'Back-end Developer',
        // ]);

        //========================================================================

        factory(Profession::class, 48)->create();


        Profession::create([
            'name' => 'Administrador Web',
        ]);

        Profession::create([
            'name' => 'Front-end Developer',
        ]);

        Profession::create([
            'name' => 'Back-end Developer',
        ]);

    }


}
