<?php

namespace App\Http\Controllers;
use Auth;
use App\ReplyDonComment;
use Illuminate\Http\Request;

class ReplyDonCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if (Auth::check()) {
            ReplyDonComment::create([
                'comment_id' => $request->input('comment_id'),
                'name' => $request->input('name'),
                'reply' => $request->input('reply'),
                'user_id' => Auth::user()->id,
                'user_image' => Auth::user()->image
            ]);

            return redirect()->back()->with('success','Reply added');
        }

        return back()->withInput()->with('error','Something wronmg');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReplyDonComment  $replyDonComment
     * @return \Illuminate\Http\Response
     */
    public function show(ReplyDonComment $replyDonComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReplyDonComment  $replyDonComment
     * @return \Illuminate\Http\Response
     */
    public function edit(ReplyDonComment $replyDonComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReplyDonComment  $replyDonComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReplyDonComment $replyDonComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReplyDonComment  $replyDonComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReplyDonComment $replyDonComment, $id)
    {
        $replyComment = ReplyDonComment::where('id', $id);
        $userauth = ReplyDonComment::where('user_id', Auth::user()->id);

        $replyComment->delete();
        return redirect()->back();
    }
}
