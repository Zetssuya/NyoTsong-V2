<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\UpdateUserProfile;
use App\Order;
use App\User;

class UserProfileController extends Controller
{
    public function index() {
        $id = auth()->user()->id;
        $user = User::where('id', $id)->first();

        $profdata = UpdateUserProfile::all();

        return view('front.profile.index', compact('user','profdata'));
    }
}
