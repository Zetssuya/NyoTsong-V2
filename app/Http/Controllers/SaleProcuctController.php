<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Category;
use App\SaleProcuct;
use Illuminate\Http\Request;

class SaleProcuctController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saledata = Sale::paginate(10);
        return view('admin.salesNdons.sale',compact('saledata'));
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
     * @param  \App\SaleProcuct  $saleProcuct
     * @return \Illuminate\Http\Response
     */
    public function show(SaleProcuct $saleProcuct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SaleProcuct  $saleProcuct
     * @return \Illuminate\Http\Response
     */
    public function edit(SaleProcuct $saleProcuct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SaleProcuct  $saleProcuct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaleProcuct $saleProcuct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SaleProcuct  $saleProcuct
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaleProcuct $saleProcuct)
    {
        //
    }
}
