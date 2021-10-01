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

        $posts = Post::limit(6)->orderByDesc('created_at')->get();
        return view('index', ['posts'=>$posts]);
    }

//    public function single($slug) {
//        $post = Post::where('slug', $slug)->first();

    public function single(Post $post) {

//        dd($post->category->name);

        return view('single', compact('post'));
                                    // ['post' => $post]
    }
}
