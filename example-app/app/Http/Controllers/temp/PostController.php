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

    public function update(Request $request, string $id)
    {
        $udata = DB::table('posts')->where('id',$id)->update([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        //return response('Done');
        return redirect()->route('posts');
    }

    public function destroy(string $id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return redirect()->route('posts');
    }

    public function destroyAll()
    {
        DB::table('posts')->delete();
        return redirect()->route('posts');
    }

    public function destroyAllTruncate()
    {
        DB::table('posts')->truncate();
        return redirect()->route('posts');
    }

    public function store(Request $request)
    {
        DB::table('posts')->insert([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return redirect()->route('posts');
    }
}
