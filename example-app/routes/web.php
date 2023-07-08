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
//Route::get('post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
/*
Route::controller(PostController::class)->group(function(){

    Route::get('posts','index')->name('posts');
    Route::get('post/create','createPost');
    Route::post('post/insert','store')->name('post.insert');
    Route::get('post/edit/{id}','edit')->name('post.edit');
    Route::put('post/update/{id}','update')->name('post.update');
    Route::get('post/delete/{id}','destroy')->name('post.delete');
    Route::get('posts/delete/all','destroyAll')->name('posts.delete.all');
    Route::get('posts/delete/all/truncate','destroyAllTruncate')->name('posts.delete.all.truncate');


});*/

// Route::get('posts',[PostController::class,'index']);
// Route::get('posts/create',[PostController::class,'createPost']);
#--------------------------------------------------------------------
// Route::resource('users',UserController::class)->except([
//     'create','show'
// ]);
//Route::resource('users',UserController::class);
Route::get('user/{id}',[UserController::class,'index']);
                      /**[UserProfileController::class,''] */
// Route::get('user_profile',UserProfileController::class);

/** working with models  */
Route::resource('posts',PostController::class);//->except(['show']);
Route::get('posts/restore/{id}',[PostController::class,'restore'])->name('post.restore');
Route::get('posts/forceDelete/{id}',[PostController::class,'forceDelete'])->name('post.delete');

