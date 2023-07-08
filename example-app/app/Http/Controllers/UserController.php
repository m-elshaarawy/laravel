<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    // public function __construct() {#Type $var = null
    //     // $this->var = $var;
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {    //User::find(2)->phone ,Phone::find(2)->user
       // Role::find(2)->users;
       $user = User::find($id);
       return $user->name;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "this is create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
