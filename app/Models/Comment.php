<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

   
    protected $guarded = [];

    public function author()//author_id
    {
            // explicit here because author_id does not exist so
            // pass as second argument ot it!
            // laravel thinks author_id is column name in user table

            return $this->belongsTo(User::class,'user_id');
        }

    public function post()//post_id in table
    {

        return $this->belongsTo(Post::class);
    }
}
// > $c=App\Models\Comment::first();
// $c->post->comments

// $post=App\Models\Post::latest()->first();
// App\Models\Comment::factory(10)->create(['post_id'=>12])
// force post id to 12 to generate comments 