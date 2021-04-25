<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\ChangePw;
use Illuminate\Http\Request;

class ChangePwController extends Controller
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
        return view('front.profile.changepw', compact('users','user'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChangePw  $changePw
     * @return \Illuminate\Http\Response
     */
    public function show(ChangePw $changePw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChangePw  $changePw
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $users = User:: findOrFail($id);
        return view('front.profile.changepw')->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChangePw  $changePw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'password' => 'required|confirmed',
        ]);
    
        $users = User::find($id);
        $users->password = bcrypt($request->input('password'));
        $users->update();
        return redirect()->back()->with('msg','Your Password have been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChangePw  $changePw
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChangePw $changePw)
    {
        //
    }
}
