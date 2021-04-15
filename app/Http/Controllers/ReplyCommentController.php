<?php

namespace App\Http\Controllers;

use Auth;
use App\ReplyComment;
use Illuminate\Http\Request;

class ReplyCommentController extends Controller
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
            ReplyComment::create([
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
     * @param  \App\ReplyComment  $replyComment
     * @return \Illuminate\Http\Response
     */
    public function show(ReplyComment $replyComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReplyComment  $replyComment
     * @return \Illuminate\Http\Response
     */
    public function edit(ReplyComment $replyComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReplyComment  $replyComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReplyComment $replyComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReplyComment  $replyComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReplyComment $replyComment, $id)
    {
        // if (Auth::check()) {
        //     $replyComment = ReplyComment::where(['id'=>$replyComment->id,'user_id'=>Auth::user()->id]);
        //     if ($replyComment->delete()) {
        //         return 1;
        //     }else{
        //         return 2;
        //     }
        // }else{

        // }
        // return 3;
        $replyComment = ReplyComment::where('id', $id);
        $userauth = ReplyComment::where('user_id', Auth::user()->id);

        $replyComment->delete();
        return redirect()->back();
    }
}
