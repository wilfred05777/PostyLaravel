<?php

namespace App\Http\Controllers\Frontend\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index(){
       return view('frontend.pages.contact');
   }
}
