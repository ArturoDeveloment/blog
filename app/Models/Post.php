<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'text_post',
        'user_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getCreator()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
