<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthorController extends Controller
{
    public function getAllAuthors(){
        $users = User::has('posts')->with('posts')->first();
        echo $users->name;
        foreach($users->posts as $post) {
            echo $post->post_slug . '<br />';
        };
    }
}
