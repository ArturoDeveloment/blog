<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class DropInfoController extends Controller
{
    public function delete_post($id)
    {
        $table = Post::find($id);
        $table->delete();
        
        return redirect('mainMenu');
    }

    public function delete_comment($id, $id_hilo)
    {
        $table = Comment::find($id);
        $table->delete();

        $url = '/answer/'.$id_hilo;

        return redirect($url);
    }
}
