<?php

namespace App\Http\Controllers;

use Auth;
use App\Sale;
use App\User;
use App\Category;
use App\Location;
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
        $user = User::where('id', Auth::user()->id)->first();
        $categories = Category::all();
        $locations = Location::all();
        return view('front.postadd.sale', compact('categories','locations','user'));  
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
            'quantity' => 'required',
            'categories' => 'required',
            'price' => 'required',
            'negotiation' => 'required',
            'detail' => 'required',
            'image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'required'
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $new_name = $image->getClientOriginalName();
            $image->move(public_path("uploads"), $new_name);
        }
        $user_id = Auth::User()->id;   
        Sale::create([
            'user_id' => $user_id,
            'name' => $request->name,
            'quantity' => $request->quantity,
            'categories'=> $request->categories,
            'price' => $request->price,
            'negotiation' => $request->negotiation,
            'detail' => $request->detail,
            'image' => $request->image->getClientOriginalName(),
            'location' => $request->location,
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
