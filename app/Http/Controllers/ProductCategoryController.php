<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Category;
use App\Sale;
use App\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vehicleindex()
    {
        // $id = auth()->user()->id;
        // $users = User::where('id', $id)->first();
        $user = User::where('id', Auth::user()->id)->first();
        $catId = 2;
        
        $cat = Category::where('id', $catId)->first();
        // dd ($cat);
        $catname = $cat->category;
        
        $saledata = Sale::where('categories', $catname)->latest()->paginate(20);

        return view('front.categoryproduct.vehicle', compact('saledata','user'));
    }
    public function landindex()
    {
        // $id = auth()->user()->id;
        // $users = User::where('id', $id)->first();
        $user = User::where('id', Auth::user()->id)->first();
        $catId = 3;
        
        $cat = Category::where('id', $catId)->first();
        // dd ($cat);
        $catname = $cat->category;
        
        $saledata = Sale::where('categories', $catname)->latest()->paginate(20);

        return view('front.categoryproduct.land', compact('saledata','user'));
    }
    public function livindex()
    {
        // $id = auth()->user()->id;
        // $users = User::where('id', $id)->first();
        $user = User::where('id', Auth::user()->id)->first();
        $catId = 4;
        
        $cat = Category::where('id', $catId)->first();
        // dd ($cat);
        $catname = $cat->category;
        
        $saledata = Sale::where('categories', $catname)->latest()->paginate(20);

        return view('front.categoryproduct.livestock', compact('saledata','user'));
    }
    public function eceindex()
    {
        // $id = auth()->user()->id;
        // $users = User::where('id', $id)->first();
        $user = User::where('id', Auth::user()->id)->first();
        $catId = 1;
        
        $cat = Category::where('id', $catId)->first();
        // dd ($cat);
        $catname = $cat->category;
        
        $saledata = Sale::where('categories', $catname)->latest()->paginate(20);

        return view('front.categoryproduct.electronic', compact('saledata','user'));
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
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {
        //
    }
}
