<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    function user() {
        return $this->belongsTo(User::class);
    }

    function post() {
        return $this->belongsTo(Post::class);
    }
}