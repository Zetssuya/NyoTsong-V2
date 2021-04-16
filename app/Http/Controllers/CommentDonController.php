<?php

namespace App\Http\Controllers;

use App\ReplyDonComment;
use Auth;
use App\CommentDon;
use Illuminate\Http\Request;

class CommentDonController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CommentDon  $commentDon
     * @return \Illuminate\Http\Response
     */
    public function show(CommentDon $commentDon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CommentDon  $commentDon
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentDon $commentDon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CommentDon  $commentDon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommentDon $commentDon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CommentDon  $commentDon
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentDon $commentDon, $id)
    {
        $mcomment = CommentDon::where('user_id', Auth::user()->id);
        // if($comment->user_id == Auth::user()->id){
                        // $maincomment = Comment::where('user_id', Auth::user()->id)->where('id', $comment->id);

            $reply = ReplyDonComment::where('comment_id', $id);
            // $mcomment = Comment::find($id);
                // $reply->delete();
                // $mcomment->delete();
                if ($reply->count() > 0 && $mcomment->count() > 0) {
                    $reply->delete();
                    $mcomment->delete();
                    
                }else if($mcomment->count() > 0){
                    $mcomment->delete();
                   
                } 
        // }
        return redirect()->back();
    }
}
