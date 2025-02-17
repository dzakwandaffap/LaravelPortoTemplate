<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
        return view('home');
    }
    
    public function featured(){
        return view('featured');
    }

    public function blog(){
        return view('blog');
    }

    public function contact(){
        return view('contact');
    }

    public function recent(){
        return view('recent');
    }

    public function presentation(){
        return view('presentation');
    }
}
