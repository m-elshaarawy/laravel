<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestMatcher\PortRequestMatcher;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::all();
        //$data = Post::get();
        return view('posts.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = new Post();  # first method
        // $data->title = $request->title;
        // $data->body  = $request->body ;
        // $data->save();
        # second method 
        Post::create([         // can use #request->all() with no []  
            'title'=>$request->title,
            'body' =>$request->body
        ]);

        return response('Done');
    }

    /**
     * Display the specified resource.
     */
    public function show()//Post $post
    {
        $data = Post::onlyTrashed()->get();
        return view('posts.softdelete',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) //Post $post
    {
        $edata = Post::findorFail($id); //Post::find($id);
                                          //Post::where('id',$id)->first();
        return view('posts.edit',compact('edata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) //Post $post
    {
        $udata = Post::findorFail($id)->update([ // can use #request->all() with no [] 
            'title'=>$request->title,
            'body' =>$request->body
        ]);
        // $udata->title = $request->title;
        // $udata->body  = $request->body ;
        // $udata->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)//Post $post
    {
        //Post::findorFail($id)->delete();
        Post::destroy($id);
        return redirect()->route('posts.index');
    }

    public function restore($id){
        Post::onlyTrashed()->where('id',$id)->restore();
        return redirect()->back();
    }
}
