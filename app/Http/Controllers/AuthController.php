<?php

namespace App\Http\Controllers;

use App\Models\EstadoCivil;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index() {
        $titulo = "Login de usuarios";
        return view("modules.auth.login", compact("titulo"));
    }

   

    public function logear(Request $request) {
        //validar datos de las credenciales
        $credenciales = $request->validate([
            'email' => 'required|email',
            'clave_usuario' => 'required'
        ]);

        //buscar el email
        $user = user::where('email', $request->email)->first();

        //validar usuario y contraseña
        if(!$user || !Hash::check($request->clave_usuario, $user->clave_usuario)){
            return back()->withErrors(['email' => 'Credencial incorrecta!'])->withInput();
        }

        //el usuario este activo
        if (!$user->activo) {
            return back()->withErrors(['email' => 'Tu cuenta esta inactiva!']);
        }

        //crear la sesion de usuario
        Auth::login($user);
        $request->session()->regenerate();

        return to_route('home');
    }

    public function crearAdmin(){
        //crear directamente un admin
        User::create([
            'nombre_usuario' => 'sebas',
            'email' => 'admin1@admin1.com',
            'clave_usuario' => Hash::make('admin1'),
            'activo' => true,
            'rol' => 'admin',
            'id_persona' => '1'

        ]);

        return "Admin creado con exito!!";
    }





    public function crearEst(){
        //crear directamente un admin
        EstadoCivil::create([
            'nombre_est_civil' => 'Soltero',
        ]);

        return "Tipo creado con exito!!";
    }



    public function crearPersona(){
        //crear directamente un admin
        Persona::create([
            'nombre_persona' => 'dasdad',
            'apellido_persona' => 'asdasdadad',
            'telefono_persona' => '213123',
            'direccion_persona' => 'Calle 213321321',
            'ci_persona' => '24545342453454',
            'sexo_persona' => 'Femenino',
            'id_est_civl' => '1'
        ]);

        return "Persona creado con exito!!";
    }

  

    public function logout() {
        Auth::logout();
        return to_route('login');
    }

}