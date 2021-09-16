<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        // show all posts
//       $posts = DB::table('posts')->get();
//       $posts = Post::orderBy('id', 'DESC')->get();

        $posts = Post::all();
        return view('home', ['posts'=>$posts]);
    }

    public function single($slug) {
        $post = Post::where('slug', $slug)->first();
        dd($post);
    }
}
