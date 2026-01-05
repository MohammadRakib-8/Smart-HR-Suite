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
        // $posts=Post::all();
        $employees = Post::where('role', 'employee')->get();


        return view('hr',compact('employees'));
    }

public function deleteData($id){
$post=post::findOrFail($id);
$post->delete();
// flash()->success('Delete Successfull!');
return redirect()->route('hrPage')->with('success', 'User deleted successfully!');

}

}
