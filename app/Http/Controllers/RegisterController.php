<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    //
    public function create(){
        return view ('register.create');
    }
    public function store(){
        // dd(request()->all());
        $attributes=request()->validate([
            'username'=>'required|max:255|min:3|unique:users,username',
            'name'=>'required|max:255|min:3|unique:users,name',
            'email'=>'email|required|max:255|unique:users,email',
            'password'=>'required|min:7|max:255'      
        ]);
        // dd('passes validation');
        $attributes['password']=bcrypt($attributes['password']);

        $user=User::create($attributes);
        auth()->login($user);
        return redirect('/')->with('success','Your Account created');
    }
}
