<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class SessionController extends Controller
{
    //
    public function destroy()
    {
        // dd('hehr');
        Auth::logout();
        return redirect('/')->with('success','See you next time');

    }
    public function create()
    {
        // dd('he');
        return view('sessions.create');
    }
    public function store(){

        $attributes=request()->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($attributes)){
            // Auth::login();

            session()->regenerate();
            return redirect('/')->with('success','welcome back');
        }
        return back()
                ->withInput()
                ->withErrors(['email'=>'Invalid credentials']);

    } 
}
