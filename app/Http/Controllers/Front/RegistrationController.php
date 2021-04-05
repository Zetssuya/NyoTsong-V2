<?php

namespace App\Http\Controllers\Front;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{

    public function index()
    {
        return view('front.registration.index');
    }

    public function store(Request $request)
    {

        // Validate the user
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required',
            'contact_no' => 'required|min:8'
        ]);

        //image upload path
        if($request->hasFile('image')){
            $image = $request->file('image');
            $new_name = $image->getClientOriginalName();
            $image->move(public_path("uploads"), $new_name);
        }

        // Save the data
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'image' => $request->image->getClientOriginalName(),
            'contact_no' => $request->contact_no,
        ]);

        // Sign the user in
        //auth()->login($user);

        // Redirect to
        return redirect('/user/login');
    }
}
