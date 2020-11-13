<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function getFullName(User $user) {
        return $user->first_name . ' ' . $user->last_name;
    }

    public function getCreatedAtAttribute($string) {
        return date('F Y',strtotime($string));
    }
}
