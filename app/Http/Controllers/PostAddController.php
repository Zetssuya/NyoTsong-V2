<?php

namespace App\Http\Controllers;

use App\PostAdd;
use Illuminate\Http\Request;

class PostAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.postadd.postad');        
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
     * @param  \App\PostAdd  $postAdd
     * @return \Illuminate\Http\Response
     */
    public function show(PostAdd $postAdd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostAdd  $postAdd
     * @return \Illuminate\Http\Response
     */
    public function edit(PostAdd $postAdd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostAdd  $postAdd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostAdd $postAdd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostAdd  $postAdd
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostAdd $postAdd)
    {
        //
    }
}
