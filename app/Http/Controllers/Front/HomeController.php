<?php

namespace App\Http\Controllers\Front;

use App\Product;
use App\Sale;
use App\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Pagination\Paginator;

class HomeController extends Controller
{
    public function index()
    {
        $saledata = Sale::paginate(10);
        $dondata = Donation::paginate(10);
        return view('front.index', compact('saledata','dondata'));
    }
}
