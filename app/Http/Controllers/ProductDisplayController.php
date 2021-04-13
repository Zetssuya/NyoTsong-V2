<?php

namespace App\Http\Controllers;
use App\Sale;
use App\Donation;
use App\ProductDisplay;
use Illuminate\Http\Request;

class ProductDisplayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saledata = Sale::paginate(10);
        $dondata = Donation::paginate(10);
        return view('front.index', compact('saledata','dondata'));
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
     * @param  \App\ProductDisplay  $productDisplay
     * @return \Illuminate\Http\Response
     */
    public function show(ProductDisplay $productDisplay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductDisplay  $productDisplay
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductDisplay $productDisplay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductDisplay  $productDisplay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductDisplay $productDisplay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductDisplay  $productDisplay
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductDisplay $productDisplay)
    {
        //
    }
}
