<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index($name, $nickname){
        return "el usuario es: {$name} y su sobrenombre es {$nickname}";
    }
}
