<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('panel.posts.index', ['posts'=>Post::all()]);
    }

    public function new() {
        return view('panel.posts.form');
    }

    public function add() {
        /*$post = new Post();
        $post->title = request('title');
        $post->slug = request('slug');
        $post->content = request('content');
        $post->image = request('image');
        $post->save();*/

        /*$post = Post::create([
            'title' => request('title'),
            'slug' => request('slug'),
            'content' => request('content'),
            'image' => request('image')
        ]);*/


        /*$validatedObj = Validator::make(request()->all(), [
            'title'   => 'required|min:5|max:255',
            'slug'    => 'required|min:3',
            'content' => 'required',
            'image'   => 'required'
        ]);
        if ($validatedObj->fails())
//            return redirect('http://localhost:8000');
//            return redirect()->back()->with(['errors'=>$validatedObj]);
            return redirect()->back()->withErrors($validatedObj);

        Post::create($validatedObj->validated());
        return redirect()->back();*/

        /*$obj = Validator::make(request()->all(), [
            'title'   => 'required|min:5|max:255',
            'slug'    => 'required|min:3',
            'content' => 'required',
            'image'   => 'required'
        ])->validate();*/

        /*$data = Validator::make(request()->all(), [
            'title'   => 'required|min:5|max:255',
            'slug'    => 'required|min:3',
            'content' => 'required',
            'image'   => 'required'
        ])->validated();*/

        /*$data = $this->validate(request(), [
            'title'   => 'required|min:5|max:255',
            'slug'    => 'required|min:3',
            'content' => 'required',
            'image'   => 'required'
            //'email'   => 'required|email'
        ]);*/

        $data = $this->validate(request(), [
            'title'   => 'required|min:5|max:255',
            'slug'    => 'required|min:3',
            'content' => 'required',
            'image'   => 'required'
            //'email'   => 'required|email'
        ], [
            'title.required' => 'وارد کردن عنوان الزامی است.',
            'title.min' => 'عنوان حداقل باید ۵ کاراکتر باشد.'
        ]);

        Post::create($data);
        return redirect()->back()->with(['success'=>true]);
    }

    public function edit($id) {
        $post = Post::find($id);
        return view('panel.posts.form')->with(['post'=>$post]);
    }

    public function update($id) {
        $data = $this->validate(request(), [
            'title'   => 'required|min:5|max:255',
            'slug'    => 'required|min:3',
            'content' => 'required',
            'image'   => 'required'
        ]);
        $post = Post::find($id);
        $post->update($data);
        return redirect('http://localhost:8000/panel/posts/')->with(['success'=>true]);
    }

    public function delete($id) {
//        $post = Post::find($id);
        $post = Post::findOrFail($id);

        /*if (is_null($post))
            return redirect('http://localhost:8000/panel/posts/')->with(['success'=>false]);*/
        $post->delete();
        return redirect('http://localhost:8000/panel/posts/')->with(['success'=>true]);
    }
}
