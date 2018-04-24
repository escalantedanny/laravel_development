<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $table = 'profession';

    public function users()
    {
        return $this->hashMany(User::class);
    }

    //si no queremos utilizar los campos de timestamp este seria el comando
    //                  public $timestamps = false;
    // y eliminariamos el campo timestamp de la migracion de la tabla

    // si queremos recibir datos de forma masiva por deir un arreglo dbemos declarar las variables 
    /*
        protected $fillable = [
        'name', 'email', 'password',
        ];
    cada variable es el dato que queremos que se genere de forma masiva 
    */

    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        /*
            cambiarle el tipo a una variable desde laravel

            protected $casts = [
                'name' = 'integer';
            ]


        */
    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

}
