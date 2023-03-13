<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $validacion = User::where('email', $email)->first();
        if(strlen($email) > 0 && strlen($password) > 0){
            if($validacion)
            {
                $credencials = User::find($validacion->id);
                
                if(password_verify($password, $credencials->password))
                {
                    if($credencials->status === "habilitado")
                    {
                        $credentials = $request->only('id','email', 'password');
                        if(Auth::attempt($credentials))
                        {
                            Auth::login($credencials);
                            return redirect()->intended('/mainMenu');
                        }
                        
                    }
                    else
                    {
                        return redirect('/')->with('texto','Usted se encuentra inhabilitado');
                    }
                }
                else
                {
                    return redirect('/')->with('texto', 'Contraseña incorrecta');
                }
            }
            else
            {
                return redirect('/')->with('texto','El correo no existe');
            }
        }
        else
        {
            return redirect('/')->with('texto','Los campos estan vacios');
        }
    }

    
}
