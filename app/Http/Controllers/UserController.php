<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Modulo de Usuarios

class UserController extends Controller
{
    public function index()
    {
        $title = 'Listado de Usuarios';

        if(request()->has('empty')){
            $users = [];
        }else{

            $users = [
                'Carolina',
                'Rodolfo',
                'Juana',
                'Kevin',
                'Juan',
                '<script>alert("Clicker")</script>'
            ];
        }



        return view('users.index',compact('users', 'title'));
    }

    public function show($id)
    {
        return view('users.show',compact('id'));   
    }

    public function create()
    {
        return 'Crear un nuevo usuario';
    }
}
