<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminRegisterUserController;

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


use App\Http\Controllers\WeatherController;

Route::get('/weather/{city}', [WeatherController::class, 'show']);

Route::get('/', [PostController::class,'index'])->name('home');

// Route::get('posts/{post}', function($id){

//     return view('post',[
//         'post'=> Post::findorFail($id)
//     ]);

// });
// Route::get('posts/{post}', function($post){

//     return view('post',[
        
//         'post'=> Post::findorFail($post)
//     ]);

// });



// route model binding new varibale as slug as post:slug or define in post model

// Route::get('posts/{post}',function(Post $post){
//     // dd($post->category->name);
//     return view('post',[
//         'post'=>$post
//     ]);
// });
Route::get('posts/{post}',[PostController::class,'show']);

Route::get('categories/{category:slug}', function(Category $category){

    // $posts=Post::paginate(1);
    return view('posts',[
        // 'posts'=>$category->posts
        // 'posts'=>$category->posts->load(['category','author'])
        'posts'=>$category->posts,
        'currentCategory'=>$category,
        'categories'=>Category::all()
        
    ]);
});
Route::get('authors/{author}',function (User $author){
    // dd($author);
    // $posts=Post::paginate(1);
    return view('posts',[

        // 'posts'=>$author->posts->load(['category','author'])
        'posts'=>$author->posts,
        'categories'=>Category::all()
        
        // 'posts'=>$author->posts
    ]);
});

Route::post('newsletter',[NewsletterController::class,'create']);

Route::get('register',[RegisterController::class,'create'])->middleware('guest');
Route::post('register',[RegisterController::class,'store'])->middleware('guest');

Route::get('login',[SessionController::class,'create'])->middleware('guest');
Route::post('login',[SessionController::class,'store'])->middleware('guest');
Route::post('logout',[SessionController::class,'destroy'])->middleware('auth');
// comment associated with post
Route::post('posts/{post:slug}/comments',[PostCommentsController::class,'store']);

Route::get('admin/posts',[AdminPostController::class,'index'])->middleware('admin');
Route::get('admin/posts/{postId}/edit',[AdminPostController::class,'edit'])->middleware('admin');

Route::patch('admin/posts/{postId}',[AdminPostController::class,'update'])->middleware('admin');
Route::delete('admin/posts/destroy/{post}',[AdminPostController::class,'destroy'])->middleware('admin');


Route::get('create/post',[PostController::class,'create'])->middleware('admin');
Route::post('admin/posts',[PostController::class,'store'])->middleware('admin');

Route::get('admin/registerUser',[AdminRegisterUserController::class,'create'])->middleware('admin');
Route::post('admin/registerUser',[AdminRegisterUserController::class,'store'])->middleware('admin');
Route::get('admin/showAllUser',[AdminRegisterUserController::class,'show'])->middleware('admin');

Route::delete('/admin/users/{userId}/destroy',[AdminRegisterUserController::class,'destroy'])->middleware('admin');


