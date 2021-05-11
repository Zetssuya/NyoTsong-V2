<?php

namespace App\Http\Controllers;
use App\Sale;
use App\User;
use Auth;

use App\Category;
use App\Location;
use App\EditProduct;
use Illuminate\Http\Request;

class EditProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        // $id = $request->route('id');
       
        $categories = Category::all();
        $locations = Location::all();
        // $proddata = Sale::where('id', $id)->first();
        $user = User::where('id', Auth::user()->id)->first();

        $proddata = Sale:: findOrFail($id);
        return view('front.profile.editproduct', compact('categories','locations','proddata','user'));
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
     * @param  \App\EditProduct  $editProduct
     * @return \Illuminate\Http\Response
     */
    public function show(EditProduct $editProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EditProduct  $editProduct
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proddata = Sale:: findOrFail($id);
        return view('front.profile.editproduct')->with('proddata', $proddata);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EditProduct  $editProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => 'required',
            'categories' => 'required',
            'price' => 'required',
            'detail' => 'required',
            'image' => 'required',
            'location' => 'required',
            
        ]);
        
        $proddata = Sale:: find($id);
        $proddata->name = $request->input('name');
        $proddata->categories = $request->input('categories');
        $proddata->price = $request->input('price');
        $proddata->detail = $request->input('detail');
        
        if($request->has('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $filename);
            $proddata->image = $request->file('image')->getClientOriginalName();
        }
        
        $proddata->location = $request->input('location');
        $proddata->update();
        return redirect()->back()->with('msg','Your Product details have been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EditProduct  $editProduct
     * @return \Illuminate\Http\Response
     */
    public function updatestatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required'
        ]);
        $proddata = Sale::find($id);
        $proddata->status = $request->input('status');
        $proddata->update();
        return redirect()->back();
    }
}
