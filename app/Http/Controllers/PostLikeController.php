<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    public function store(Post $post, Request $request){
        // dd('store');
        // dd($post);
        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);

        return back();
    }
}
