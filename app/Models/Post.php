<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

// it will load relationship whenever get post model
// it will reduce queries because otherwise it will double

// queries
    protected $with =['category','author'];

    public function getRouteKeyName()
{
    return 'slug';
}
public function comments(){

    return $this->hasMany(Comment::class);
}

public function category(){


    return $this->belongsTo(Category::class);

}

public function author(){
    // foreig key assume author_id in table to override it
    // pass second argument as user_id
    return $this->belongsTo(User::class,'user_id');

}

}


