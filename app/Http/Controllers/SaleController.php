<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Category;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('front.postadd.sale', compact('categories'));  
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
        $request->validate([
            'name' => 'required',
            'categories' => 'required',
            'price' => 'required',
            'detail' => 'required',
            'image' => 'required|mimes:jpeg, png, svg, gif, jpg',
            'location' => 'required'
        ]);
        if(hasFile('image')){
            $image = time().'.'.$req->getClientOriginalExtension();
            $req->image->move(public_path('uploads'), $image);
        }
        Sale::create([
            'name' => $req->name,
            'category'=> $req->category,
            'price' => $req->price,
            'detail' => $req->detail,
            'image' => $req->image->getClientOriginalExtension(),
            'location' => $req->location,
        ]);
        return redirect()->back()->with('msg','Your Product has been Posted for sale!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
