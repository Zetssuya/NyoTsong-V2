<?php

namespace App\Http\Controllers;

use App\SystemFeedback;
use App\FeedbackSystem;
use Illuminate\Http\Request;

class SystemFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbackdata = FeedbackSystem::paginate(10);
        return view('admin.systemfeedback.sysfeedback',compact('feedbackdata'));
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
     * @param  \App\SystemFeedback  $systemFeedback
     * @return \Illuminate\Http\Response
     */
    public function show(SystemFeedback $systemFeedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SystemFeedback  $systemFeedback
     * @return \Illuminate\Http\Response
     */
    public function edit(SystemFeedback $systemFeedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SystemFeedback  $systemFeedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SystemFeedback $systemFeedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SystemFeedback  $systemFeedback
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedbackdata = FeedbackSystem:: findOrFail($id);
        $feedbackdata->delete();
        return redirect()->back()->with('msg','Feedback deleted successfully!');
    }
}
