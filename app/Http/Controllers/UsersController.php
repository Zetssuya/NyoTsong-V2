<?php

namespace App\Http\Controllers;
use App\User;
use App\UserOTP;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index() {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    // public function show($id){
    //     $user_id = $id;
    //     return view('admin.users.edituser', compact('user_id'));
    // }
     
    public function edit(Request $request, $id){
        $users = User:: findOrFail($id);
        return view('admin.users.edituser')->with('users', $users);
    }
    
    public function update(Request $request, $id){
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->contact_no = $request->input('contact_no');
        $users->update();
        return redirect()->back()->with('msg','User details updated successfully!');
    }

    public function deleteuser($id){
        $users = User:: findOrFail($id);
        $users->delete();
        return redirect()->back()->with('msg','User deleted successfully!');
    }

    public function deletenonotp(){
        $otpusers = UserOTP::select('email')->get();
        // dd($otpusers);
        // $uemail = $otpusers->email;
        $users = User::whereNotIn('email', $otpusers)->delete();
        return redirect()->back()->with('msg','Unnecessary Users deleted successfully!');
    }
}
