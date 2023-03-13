<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CreatePostController extends Controller
{
    public function create(Request $request)
    {
        $user = Auth::user();

        $post = new Post;
        $post->user_id = $user->id;
        $post->title = $request->input("titulo");
        $post->text_post = $request->input("text-hilo");
        $post->save();

        return redirect('mainMenu');
    }
}
