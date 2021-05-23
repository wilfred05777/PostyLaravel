<?php

namespace App\Http\Controllers\Frontend\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index(){
        return view('frontend.pages.social-media');
    }
}
