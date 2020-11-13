<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthorController extends Controller
{
    public function getAllAuthors(){
        $users = User::has('posts')->with('posts')->orderBy('first_name')->paginate(10);
        return view('pages.authors', compact('users'));
    }
}
