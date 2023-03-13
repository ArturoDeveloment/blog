<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;
    
    protected $table = 'comments';

    protected $fillable = [
        'answer',
        'post_id',
        'user_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getAuthor($id_user)
    {
        $cedentials = User::where('id', $id_user)->first();
        $name = $cedentials->username;
        return $name;
    }
}
