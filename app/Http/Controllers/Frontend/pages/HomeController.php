<?php

namespace App\Http\Controllers\Frontend\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request ){
        return view('frontend.pages.home');
    }
}
