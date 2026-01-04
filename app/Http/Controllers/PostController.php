<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function quickActionFn(){
        return view('quickActions');
    }


public function addUserFn(Request $request){

$validated=$request->validate([
'name' => 'required',
'email' => 'required|email|unique:posts,email',
'phone' => 'required|unique:posts,phone',
'role' => 'required',
'password' => 'required|min:6|confirmed',]);


 $post= new Post;

    $post->name=$request->name; 
    $post->email = $request->email;
    $post->phone = $request->phone;
    $post->role = $request->role;
    $post->password = $request->password;

    $post->save();
   
    return redirect()->back()->with('success','Successfully registred data into database');  

    }

    public function dataRetriveIndex(){
        $posts=Post::all();

        return view('hr',compact('posts'));
    }
}
