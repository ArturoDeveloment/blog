<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;


class MainMenuController extends Controller
{
    public function index()
    {

        if(Auth::check())
        {
            $user = Auth::user();
            $posts = Post::with(['getCreator'])->get();
            return view('mainMenu', compact('posts'), ['user' => $user]);
        }
        else
        {
            return redirect('/')->with('texto', 'credenciales no aceptadas');
        }
    }
}
