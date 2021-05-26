<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PostController extends Controller
{
    public function index(){

        // $posts = Post::get(); // laravel collection
        // $posts = Post::paginate(20);

        // $posts = Post::latest()->with(['user', 'likes'])->paginate(20);
        $posts = Post::orderBy('created_at', 'desc')->with(['user', 'likes'])->paginate(20);

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

    public function destroy(Post $post){
        // dd($post);

        // if($post->ownedBy(auth()->user())){
        //     dd('no');
        // }

        $this->authorize('delete', $post);
        $post->delete();

        return back();
    }
}
