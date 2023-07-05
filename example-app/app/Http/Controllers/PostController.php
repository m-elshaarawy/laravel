<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return view('posts');
    }
    public function createPost(){
        return view('post_creat');
    }
}
