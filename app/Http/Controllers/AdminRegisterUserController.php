<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminRegisterUserController extends Controller
{
    //
    public function create()
    {
        // dd('dkskd;');
        return view('admin.users.create');
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
                // auth()->login($user);
                return redirect('/')->with('success','New Account created');
    } 
    public function show()
    {
        $users_condition = User::where('name','not like','aaa')->paginate(50);

        // dd($users_condition);

        return view('admin.users.show',[
            
            'users'=> $users_condition 
        ]);

    }
    public function destroy(Request $request,$userId)
    {
        User::find($userId)->delete();
        // $user->delete();

        

        return back()->with('success','User Deleted!');
    }
   
}
