<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


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
'salary' => 'required|numeric',
'absent_count' => 'required|integer',
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

public function markAbsent($id)
{
    $employee = Post::findOrFail($id);
    $employee->increment('absent_count');

    return back()->with('success', 'Absent marked successfully');
}

public function editEmployee($id)
    {
        $employee = Post::findOrFail($id);
        return view('editEmployee', compact('employee'));
    }

    public function updateEmployee(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:posts,email,' . $id,
            'phone' => 'required|unique:posts,phone,' . $id,
            'role' => 'required',
            'salary' => 'required|numeric',
            'absent_count' => 'required|integer|min:0',
        ]);

        $employee = Post::findOrFail($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->role = $request->role;
        $employee->salary = $request->salary;
        $employee->absent_count = $request->absent_count;
        $employee->save();

        return redirect()->route('hrPage')->with('success', 'Employee updated successfully!');
    }

    public function calculatePayroll($id)
{
    $employee = Post::findOrFail($id);

    $totalWorkingDays = 30; // assuming 30 days/month
    $dailySalary = $employee->salary / $totalWorkingDays;

    $deduction = $employee->absent_count * $dailySalary;
    $finalSalary = $employee->salary - $deduction;

    return view('payroll', compact('employee', 'dailySalary', 'deduction', 'finalSalary'));
}




// public function login(Request $request)
// {
//     // Validate the form inputs
//     $credentials = $request->validate([
//         'email' => ['required', 'email'],
//         // 'role'=>['required'],
//         'password' => ['required'],
//     ]);

//     // Attempt login
//     if (Auth::attempt($credentials)) {
//         $request->session()->regenerate();

//         // Redirect based on role
//         $role = Auth::user()->role;
//         if ($role == 'admin') return redirect('/admin/dashboard');
//         if ($role == 'hr') return redirect('/hr/dashboard');
//         if ($role == 'employee') return redirect('/employee/dashboard');
//     }

//     // Login failed
//     return back()->withErrors([
//         'email' => 'Invalid credentials.',
//     ]);
// }
}
