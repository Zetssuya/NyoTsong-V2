<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\Location;
use App\Donation;
use App\EditDonProd;
use Illuminate\Http\Request;

class EditDonProdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $locations = Location::all();
        $user = User::where('id', Auth::user()->id)->first();
        // $proddata = Sale::where('id', $id)->first();
        $proddondata = Donation:: findOrFail($id);
        return view('front.profile.editdonprod', compact('locations','proddondata','user'));
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
     * @param  \App\EditDonProd  $editDonProd
     * @return \Illuminate\Http\Response
     */
    public function show(EditDonProd $editDonProd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EditDonProd  $editDonProd
     * @return \Illuminate\Http\Response
     */
    public function edit(EditDonProd $editDonProd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EditDonProd  $editDonProd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required',
            'location' => 'required',
            
        ]);
        
        $proddondata = Donation:: find($id);
        $proddondata->name = $request->input('name');
        $proddondata->detail = $request->input('detail');
        
        if($request->has('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $filename);
            $proddondata->image = $request->file('image')->getClientOriginalName();
        }
        
        $proddondata->location = $request->input('location');
        $proddondata->update();
        return redirect()->back()->with('msg','Your Product details have been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EditDonProd  $editDonProd
     * @return \Illuminate\Http\Response
     */
    public function updatestat(Request $request, $id)
    {
        
        $request->validate([
            'status' => 'required'
        ]);
        $proddondata = Donation::find($id);
        $proddondata->status = $request->input('status');
        $proddondata->update();
        return redirect()->back();
    }
}
