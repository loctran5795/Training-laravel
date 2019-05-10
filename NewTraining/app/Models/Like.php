<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';

    protected $fillable = ['id', 'user_id', 'post_id', 'created_at', 'updated_at'];

    public function posts()
    {
        return $this->belongsTo(\App\Models\Post::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
