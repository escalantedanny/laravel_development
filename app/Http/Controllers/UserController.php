<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function index(){
        $users = User::all();

        // $prof = $users->profession_id;
        // dd($prof);

        //$users = ['danny', 'ezequiel', 'escalante', 'daniel', 'maria'];

        $title = 'Listado de Usuarios';
        $users = User::orderBy('id', 'ASC')->paginate(10);

        return view('users.usuarios', compact('title', 'users'));
    }

    public function show(User $user){

        return view('users.details', compact('user'));
    }
    public function create(){

        $profe = Profession::all();

        return view('users.crear',compact('profe'));
    }

    public function store()
    {
        // $data = request()->all();
        // dd($data);

        $data = request()->validate([
            'fname'   => 'required',
            'lname'   => 'required',
            'password'=> 'required|min:6',
            'password-2' => 'required|same:password',
            'email'   => 'required|email|unique:users,email',
            'profession_id' => 'required',
            'phone'   => ''
        ],[
            'name.required'  =>  'El campo nombre es obligatorio'
        ]); 

        
        User::create([

            'fname' => $data['fname'],
            "lname" => $data['lname'],
            "password" => bcrypt($data['password']),
            "email" => $data['email'],
            "profession_id" => $data['profession_id'],
            "phone" => $data['phone'],
                        
        ]);
        
        return redirect('usuarios');
    }

    public function update(User $user){
        
        //recibimos la data del formulario para ser enviada a la base de datos
        $data = request()->validate([
            'fname'   => 'required',
            'lname'   => 'required',
            'password'=> '',                                //enviamos el ID para que lo excluya de la validacion
            'email'   => 'required|email|unique:users,email,'.$user->id,

            'profession_id' => '',
            'phone'   => '',
        ]);
            // validar para que el usuario no tenga necesidad cambiar la contraseña
            if ($data['password'] != null){
                $data['password'] = bcrypt($data['password']);
            } else {
                unset($data['password']);
            }
        
        //dd($data);
        //comando UPDATE para actualizar en la base de datos
        $user->update($data);

        //redireccionamos a la vista usuario para observar los campos actualizadoss
        return redirect("usuarios/{$user->id}");
    }

    public function previo(User $user){

        return view('users.eliminar', compact('user'));
    }

    public function destroy(User $user){
        
        $user->delete();

        return redirect('usuarios');
    }


}
