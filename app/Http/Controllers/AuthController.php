<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerForm(){
        return view('auth.register'); 
    }

    //Método para guardar la información en la base de datos
    public function register(Request $request){
        //Validar los datos del formulario
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        //Guardar la informacion en la base de datos
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        //Iniciar sesión de forma autmatica
        Auth::login($user);

        return redirect()->route('bolsas.index');
    }

    public function loginform(){
        return view('auth.login');
    }

    //Metodo para iniciar sesión
    public function login(Request $request){
        //Validar los valores del formulario
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);     

        //Realizar intento de inicio de sesión
        if(Auth::attempt($data)){
            //Obtener informacion de la sesion y generar sus credenciales
            $request->session()->regenerate();
            //Redireccionar al usuario con su sesión iniciada
            return redirect()->route('bolsas.index');   
        }

        //Si los datos son incorrectos, mandar un mensjae de error
        return back()->withErrors([
            'email' => 'Las credenciales no son correctas',
        ])->onlyInput('email');
    }
    
    //Metodo para cerrar sesión
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('acceso');
    }
}
