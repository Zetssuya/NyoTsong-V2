<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\Sale;
use App\Donation;
use App\MyAd;
use Illuminate\Http\Request;

class MyAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $saledata = Sale::where('user_id', $id)->latest()->paginate(10);
        $dondata = Donation::where('user_id', $id)->latest()->paginate(10);
        return view('front.profile.myad', compact('saledata','dondata'));
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
     * @param  \App\MyAd  $myAd
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // $id = auth()->user()->id;
        // $saledata = Sale::where('user_id', $id)->first();

        // return view('front.profile.myad', compact('saledata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MyAd  $myAd
     * @return \Illuminate\Http\Response
     */
    public function edit(MyAd $myAd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MyAd  $myAd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyAd $myAd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MyAd  $myAd
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyAd $myAd)
    {
        //
    }
}
