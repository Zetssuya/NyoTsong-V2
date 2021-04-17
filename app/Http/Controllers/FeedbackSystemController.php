<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\FeedbackSystem;
use Illuminate\Http\Request;

class FeedbackSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = FeedbackSystem::latest('created_at')->get();
        return view('front.feedbacks.feedbacksys', compact('feedbacks'));
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
        // $uid = Auth::user()->id;
        $request->validate([
            'feedback' => 'required',
        ]);
        FeedbackSystem::create([
            'user_id' => Auth::user()->id,
            'feedback' => $request->input('feedback')
        ]);

        return redirect()->back()->with('msg','Your feedback has been send successfully! Thank Your for your Feedback!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FeedbackSystem  $feedbackSystem
     * @return \Illuminate\Http\Response
     */
    public function show(FeedbackSystem $feedbackSystem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FeedbackSystem  $feedbackSystem
     * @return \Illuminate\Http\Response
     */
    public function edit(FeedbackSystem $feedbackSystem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeedbackSystem  $feedbackSystem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeedbackSystem $feedbackSystem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FeedbackSystem  $feedbackSystem
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeedbackSystem $feedbackSystem)
    {
        //
    }
}
