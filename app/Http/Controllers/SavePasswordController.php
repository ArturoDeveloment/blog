<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SavePasswordController extends Controller
{
    public function index (Request $request)
    {
        $user = User::where('email', $request->input('email'))->first(); 
        if ($user)
        {
            if(!($user->status == "desabilitado")){
                $texto = "Ya le enviamos su correo";
                return redirect('/')->with('texto', $texto);
            }
            else
            {
                $texto = "Usted se encuentra desabilitado";
                return redirect('/')->with('texto', $texto);
            }
        }
        else
        {
            $texto = "El correo ingresado es inexistente";
            return redirect('/')->with('texto', $texto);
        }
    }
}
