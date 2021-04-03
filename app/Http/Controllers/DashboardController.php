<?php

namespace App\Http\Controllers;

use App\Sale;
use App\User;
use App\Donation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index() {
        $user = new User();
        $sale = new Sale();
        $donation = new Donation();
        return view('admin.dashboard', compact('user', 'sale','donation'));
    }

}
