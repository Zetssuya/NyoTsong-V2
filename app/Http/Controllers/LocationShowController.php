<?php

namespace App\Http\Controllers;
use App\Location;
use Illuminate\Http\Request;

class LocationShowController extends Controller
{
    public function index()
    {
        $locations = Location::paginate(20);
        return view('admin.locations.location', compact('locations'));
    }
}
