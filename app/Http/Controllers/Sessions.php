<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Sessions extends Controller
{
       //
       public function create(){
        return view('auth.login');
    }

    //Verificar Datos
    public function store(){
        if (auth()->attempt(request(['email', 'password']))==false){
            return back()->withErrors([
                'messages'=>'El correo o la contraseña son invalidos',
            ]);
        }
        return redirect()->to('/admin');
    }

    //Cerrar Sesion
    public function destroy(){
        auth()->logout();

        return redirect()->to('/');

    }
}
