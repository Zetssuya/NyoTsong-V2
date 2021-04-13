<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\Sale;
use App\Donation;
use App\NearbyProd;
use Illuminate\Http\Request;

class NearbyProdController extends Controller
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
        
        $userloc = auth()->user()->location;
        $saledata = Sale::where('location', $userloc)->paginate(10);
        $dondata = Donation::where('location', $userloc)->paginate(10);

        return view('front.localized.nearbyprod', compact('users','saledata','dondata'));
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
     * @param  \App\NearbyProd  $nearbyProd
     * @return \Illuminate\Http\Response
     */
    public function show(NearbyProd $nearbyProd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NearbyProd  $nearbyProd
     * @return \Illuminate\Http\Response
     */
    public function edit(NearbyProd $nearbyProd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NearbyProd  $nearbyProd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NearbyProd $nearbyProd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NearbyProd  $nearbyProd
     * @return \Illuminate\Http\Response
     */
    public function destroy(NearbyProd $nearbyProd)
    {
        //
    }
}
