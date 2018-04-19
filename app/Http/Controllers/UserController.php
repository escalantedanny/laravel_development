<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'usuarios';
    }

    public function show($id){
        return "el usuario es: {$id}";
    }

    public function create(){
        return "crear usuario nuevo";
    }




}
