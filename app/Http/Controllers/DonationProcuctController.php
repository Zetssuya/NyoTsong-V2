<?php

namespace App\Http\Controllers;
use App\Donation;
use App\DonationProcuct;
use Illuminate\Http\Request;

class DonationProcuctController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dondata = Donation::paginate(10);
        return view('admin.salesNdons.donation',compact('dondata'));
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
     * @param  \App\DonationProcuct  $donationProcuct
     * @return \Illuminate\Http\Response
     */
    public function show(DonationProcuct $donationProcuct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DonationProcuct  $donationProcuct
     * @return \Illuminate\Http\Response
     */
    public function edit(DonationProcuct $donationProcuct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DonationProcuct  $donationProcuct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DonationProcuct $donationProcuct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DonationProcuct  $donationProcuct
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dondata = Donation:: findOrFail($id);
        $dondata->delete();
        return redirect()->back()->with('msg','Donation Product deleted successfully!');
    }
}
