<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index(){
        $data = DB::table('posts')->get();
        return view('posts.index',compact('data'));
    }

    public function createPost(){
        return view('posts.create');
    }

    public function edit(string $id)
    {
        $edata = DB::table('posts')->where('id',$id)->first();
        return view('posts.edit',compact('edata'));
    }

    public function store(Request $request)
    {
        DB::table('posts')->insert([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return response('Done');
    }
}
