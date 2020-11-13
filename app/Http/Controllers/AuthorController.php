<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthorController extends Controller
{
    public function getAllAuthors(){
        $users = User::has('posts')->with('posts')->first();
        return view('pages.authors', compact('users'));
    }
}
