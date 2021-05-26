<?php

namespace App\Http\Controllers;

use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    // 2nd way of implementing a middleware
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(){

        // $user = auth()->user();

        // Mail::to($user)->send(new PostLiked());

        // dd(auth()->user()->posts);

        // dd(auth()->user());
        return view('dashboard');
    }
}
