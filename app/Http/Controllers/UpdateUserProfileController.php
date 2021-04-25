<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\UpdateUserProfile;
use Illuminate\Http\Request;

class UpdateUserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $user = User::where('id', Auth::user()->id)->first();
        
        $id = auth()->user()->id;
        $users = User::where('id', $id)->first();
        return view('front.profile.updateprofile', compact('users','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UpdateUserProfile  $updateUserProfile
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // $users = User:: findOrFail($id);
        // return view('admin.users.edituser')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UpdateUserProfile  $updateUserProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $users = User:: findOrFail($id);
        return view('front.profile.updateprofile')->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UpdateUserProfile  $updateUserProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
       
       
        if($request->has('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $filename);
            $users->image = $request->file('image')->getClientOriginalName();
        }
    

        $users->contact_no = $request->input('contact_no');
        $users->update();
        return redirect()->back()->with('msg','Your details have been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UpdateUserProfile  $updateUserProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User:: findOrFail($id);
        $users->delete();
        return redirect('/user/register');
    }
}
