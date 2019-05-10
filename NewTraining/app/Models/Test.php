<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';

    protected $fillable = ['id', 'user_id', 'name', 'content'];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
