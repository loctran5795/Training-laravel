<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['user_id', 'title', 'content', 'image_post'];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function comments()
    {
        return $this->hasMany(\App\Models\Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(\App\Models\Like::class);
    }

    public function getImagePostAttribute($value)
    {
        return Storage::url($value);
    }

    // public function getShortContentAttribute()
    // {
    //     return $this->id + 1;
    // }

    public function liked($id)
    {
        $like = $this->likes()
                ->where('user_id', $id)
                ->first();

        return $like ? true : false;
    }
}
