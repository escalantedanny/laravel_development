<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;   

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //DB::select('SELECT * FROM users');

            // $ profesion = DB::table('profession')
            // ->select('id')
            // ->where(['name' => 'Desarrollador QA'])
            // ->first() // esto se saca el primer valor de la tabla o la primera pocision
            // ->value('id') // si queremos saber el valor de la columna id

            // DB::table('users')->insert([
            //     'profession_id' => '1',
            //     'fname' => 'danny ezequiel',
            //     'lname' => 'escalante',
            //     'password' => bcrypt('laravel'),
            //     'email' => 'danny@gmail.com',
            //     'phone' => '930036814',
            //     'rol' => 'admin'            
            // ]);
    
            factory(User::class, 24)->create([
                'profession_id' => '1',
            ]);

            factory(User::class, 24)->create([
                'profession_id' => '2',
            ]);
            
        User::create([
            'profession_id' => '1',
            'fname' => 'danny ezequiel',
            'lname' => 'escalante',
            'password' => bcrypt('laravel'),
            'email' => 'danny@gmail.com',
            'phone' => '930036814',
            'rol' => 'admin' 
        ]);

        User::create([
            'profession_id' => '1',
            'fname' => 'Maria Angelica',
            'lname' => 'duran',
            'password' => bcrypt('xochiquetzal'),
            'email' => 'maria@gmail.com',
            'phone' => '16539496',
            'rol' => 'member'            
        ]);

        User::create([
            'profession_id' => '3',
            'fname' => 'Daniel Eduardo',
            'lname' => 'Escalante',
            'password' => bcrypt('daniel'),
            'email' => 'daniel@gmail.com',
            'phone' => '29239643983',
            'rol' => 'member'            
        ]);

        User::create([
            'profession_id' => '2',
            'fname' => 'Santiago Andres',
            'lname' => 'escalante',
            'password' => bcrypt('santiago'),
            'email' => 'santiago@gmail.com',
            'phone' => '2892796',
            'rol' => 'admin'            
        ]);
    }
}