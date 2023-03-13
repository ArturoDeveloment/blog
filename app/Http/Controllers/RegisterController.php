<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function sing_up(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = password_hash($request->input('password'), PASSWORD_BCRYPT);
        $confirm_password = $request->input('confirm_password');
        if(strlen($name) != 0 && strlen($email) != 0 && strlen($password) != 0 && strlen($confirm_password) != 0)
        {
            if (password_verify($confirm_password, $password))
            {
                if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/', $request->input('password'))) 
                { 
                    
                    $validation = User::where('email', $request->input('email'))->first();

                    if($validation)
                    {
                        $texto = 'El correo ya existe';
                        return view('register', ['texto' => $texto]);
                    }
                    else
                    {
                        $query = new User;
                        $query->username = $request->input('name');
                        $query->email = $request->input('email');
                        $query->password = $password;
                        $query->save();
                        return redirect('/');
                    }
                }
                else
                {
                    $texto = 'La contraseña no cumple con las condiciones';
                    return view('register', ['texto' =>  $texto]);
                }
            }
            else
            {
                $texto = 'Las contraseñas no coinciden';
                return view('register', ['texto' => $texto]);
            }
        }
        else
        {
            $texto = 'Se detectaron campos vacios';
            return view('register', ['texto' => $texto]);
        }
    }
}

