<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Traits\TestTrait;
use Illuminate\Http\Request;
use Symfony\Component\Console\Tester\TesterTrait;

class TestController extends Controller
{
    use TestTrait;

        public function index(){
            // $data = User::all();
            // return $data;
            // $data = Post::all();
            // return $data;
            return $this->getData(Post::class);
        }
}
