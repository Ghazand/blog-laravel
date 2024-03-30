<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;
use App\Support\Collection;
class PostController extends Controller
{
    public function index()
    {
                
        
        // $posts= Post::latest()->paginate(3)->withQueryString();

        $posts= Post::latest();

        if(request('search')){
            $posts
            ->where('title','like','%' . request('search') . '%')
            ->orwhere('body','like','%' . request('search') . '%')
            
            ;
        }

        // DB::listen(function ($query){
        //     logger($query->sql,$query->bindings);
        // });

            return view('posts',[

            // 'posts'=>Post::all()
            // if we have 50 blog post on page we would not have 51
            // sql queries but 2  one to select all 50 post other to select
            // respective category with key word
            // 'posts'=>Post::latest()->with('category','author')->get()
                // 'posts'=>Post::latest()->get(),
                // 'currentCategory'=>$category,

                'posts'=>$posts->get(),
                'categories'=>Category::all()

        ]);
    }
    public function show(Post $post){
        return view('post',[
            'post'=>$post
        ]);
    }

public function create(){

    return view('post.create');
}

public function store(){

    // $path = request()->file('thumbnail')->store('thumbnail');
    // return 'Done'.$path;
    $attributes = request()->validate([
        'title'=>'required',
        'slug'=>'required|unique:posts,slug',
        'excerpt'=>'required',
        'body'=>'required',
        'category_id'=>'required|exists:categories,id',
        'thumbnail'=>'required|image'
    ]);

    $attributes['user_id']=auth()->id();
    $attributes['thumbnail']=request()->file('thumbnail')->store('thumbnail');
    Post::create($attributes);
    return redirect('/');
    // asset('storage/'. $post->thumbnail)
}
}
