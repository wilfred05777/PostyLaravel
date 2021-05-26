<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        // $posts = Post::get(); // laravel collection
        // $posts = Post::paginate(20);
        $posts = Post::with(['user', 'likes'])->paginate(20);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request){
        // dd('ok');

        $this->validate($request, [
            'body' => 'required'
        ]);
                // relationship
        // $request->user()->posts()->create([
        //     // user_id - laravel
        //     // 'body' => $request->body
        // ]);

        $request->user()->posts()->create($request->only('body'));

        return back();

        // auth()->user()->posts()->create();

        // Post::create([
        //     'user_id' => auth()->id(),
        //     'body' => $request->body
        // ]);
    }
}
