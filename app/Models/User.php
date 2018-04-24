<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'fname', 'lname', 'password', 'email', 'profession_id','phone'
    ];

    public function isAdmin(){
        return $this->email === 'danny@gmail.com';
    }

    public static function findByEmail($email){
        return static::where(compact('email'))->first();
    }


    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }

}
