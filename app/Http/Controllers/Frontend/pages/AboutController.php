<?php

namespace App\Http\Controllers\Frontend\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('frontend.pages.about');
    }
}
