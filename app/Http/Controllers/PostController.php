<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }

    public function store(Request $request){
        // dd('ok');

        $this->validate($request, [
            'body' => 'required'
        ]);
                // relationship
        $request->user()->posts()->create([
            // user_id - laravel
            'body' => $request->body
        ]);

        return back();

        // auth()->user()->posts()->create();

        // Post::create([
        //     'user_id' => auth()->id(),
        //     'body' => $request->body
        // ]);
    }
}
