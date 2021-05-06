<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Donation;
use App\Sale;
use App\LatestProduct;
use Illuminate\Http\Request;

class LatestProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saleindex()
    {
        $user = User::where('id', Auth::user()->id)->first();
        
        $saledata = Sale::latest()->paginate(20);

        return view('front.latestproduct.latestsale', compact('saledata','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function donindex()
    {
        $user = User::where('id', Auth::user()->id)->first();
        
        $dondata = Donation::latest()->paginate(20);

        return view('front.latestproduct.latestdonation', compact('dondata','user'));
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
     * @param  \App\LatestProduct  $latestProduct
     * @return \Illuminate\Http\Response
     */
    public function show(LatestProduct $latestProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LatestProduct  $latestProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(LatestProduct $latestProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LatestProduct  $latestProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LatestProduct $latestProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LatestProduct  $latestProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(LatestProduct $latestProduct)
    {
        //
    }
}
