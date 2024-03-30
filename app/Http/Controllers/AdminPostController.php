<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;


use App\Models\Post;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    //

    public function index()
    {

        return view('admin.posts.index',[
            'posts'=>Post::paginate(50)
        ]);
    }
    public function edit(Request $request,  $postId){

        $post=Post::find($postId);
        
        return view('admin.posts.edit',['post'=>$post]);
    }
    public function update(Request $request, $postId){
        
        $post=Post::find($postId);
        $attributes = request()->validate([
            'title'=>'required',
            'slug'=>['required',Rule::unique('posts','slug')->ignore($post->id)],
            'excerpt'=>'required',
            'body'=>'required',
            'category_id'=>'required|exists:categories,id',
            'thumbnail'=>'required|image'
        ]);

        if(isset($attributes['thumbnail']))
        {
             $attributes['thumbnail']=request()->file('thumbnail')->store('thumbnail');
        }
        $post->update($attributes);



        return back()->with('success','Post updated!');


    }
    public function destroy(Request $request,$postId)
    {


        $post= Post::find($postId);

        $post->delete();
        return back()->with('success','Post Deleted!');
    }

    

}
