<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use GuzzleHttp\Psr7\Request;
#use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');//welcome2
});

// Route::post('users', function(Request $request){
//     return $request; //view('users');
// });
#------------------------------------------------------------------
// Route::get('users',function(){
//     //$name ='mohamed';
//     return view('users');//compact('name'),,["name"=> "mohamed"]
// });
#------------------------------------------------------------------
// Route::get('posts',function(){
//     return view('posts');
// });

#------------------------------------------------------------------
Route::controller(PostController::class)->group(function(){

    Route::get('posts','index');
    Route::get('posts/create','createPost');

});

// Route::get('posts',[PostController::class,'index']);
// Route::get('posts/create',[PostController::class,'createPost']);
#--------------------------------------------------------------------
// Route::resource('users',UserController::class)->except([
//     'create','show'
// ]);
Route::resource('users',UserController::class)->only([
    'index','update','show'
]);
                      /**[UserProfileController::class,''] */
Route::get('user_profile',UserProfileController::class);
