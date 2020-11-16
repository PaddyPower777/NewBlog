<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function getLatestPost() {
        $post = Post::select('*')->orderBy('id','desc')->limit('1')->get();
        return view('pages.welcome', compact('post'));
    }

    public function getAuthorPosts($author_name_slug, $author_id) {
        $posts = Post::select('*')->where('user_id', $author_id)->orderBy('id','desc')->get();
        return view('pages.author-posts', compact('posts', 'author_name_slug'));
    }

    public function getPost($post_slug, $post_id) {
        $post = Post::select('*')->where('id', $post_id)->orderBy('id','desc')->get();
        return view('pages.post', compact('post'));
    }
}
