<?php

namespace App\Http\Controllers;

use App\PostAdd;
use App\User;
use Auth;
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
        $user = User::where('id', Auth::user()->id)->first();
        return view('front.postadd.postad', compact('user'));        
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
