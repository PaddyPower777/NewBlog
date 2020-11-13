<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function getCreatedAtAttribute($string) {
        return date('jS F Y \a\t g:i a',strtotime($string));
    }
}
