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
        $id = auth()->user()->id;
        $users = User::where('id', $id)->first();
        return view('front.profile.updateprofile', compact('users'));
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
        // $request->validate([
        //     'image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'contact_no' => 'required|min:8'
        // ]);

        // if($request->hasFile('image')){
        //     $image = $request->file('image');
        //     $new_name = $image->getClientOriginalName();
        //     $image->move(public_path("uploads"), $new_name);
        // }
        // $user_id = Auth::User()->id;   
        // UpdateUserProfile::create([
        //     'user_id' => $user_id,
        //     'image' => $request->image->getClientOriginalName(),
        //     'contact_no' => $request->contact_no,
        // ]);
        // return redirect()->back()->with('msg','Your profile has been updated!');
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
        // $users->image = $request->input('image');
       
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
    public function destroy(UpdateUserProfile $updateUserProfile)
    {
        //
    }
}
