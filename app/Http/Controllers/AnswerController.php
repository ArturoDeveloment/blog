<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;


class AnswerController extends Controller
{
    public function show()
    {

    }

    public function send($id_hilo)
    {
        if(Auth::check())
        {
            $getAuthor = new Comment();
            $user_info = Auth::user();
            $id_user = $user_info->id;
            $post_info = Post::where('id', $id_hilo)->first();
            $comments = Comment::all();
            

            return redirect('responder')->with('post_info',$post_info)->with('id_user',$id_user)->with('comments', $comments)->with('getAuthor', $getAuthor);
        }
        return redirect('/')->with('texto', 'No tiene credenciales');
    }

    public function create(Request $request, $id_hilo)
    {
        $user_info = Auth::user();
        $text = $request->text;

        $comment = new Comment;
        $comment->user_id = $user_info->id;
        $comment->post_id = $id_hilo;
        $comment->answer = $text;
        $comment->save();

        $url = '/answer/'.$id_hilo;

        return redirect($url);
    }
}
