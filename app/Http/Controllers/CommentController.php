<?php

namespace App\Http\Controllers;

use App\Comment;
use Auth;
use App\ReplyComment;
use Illuminate\Http\Request;

class CommentController extends Controller
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
    public function store(Request $request, $id)
    {
        // $request->validate([
        //     'comment' => 'required',
        // ]);
        // if (Auth::check()) {
        //     Comment::create([
        //         'name' => Auth::user()->name,
        //         'comment' => $request->input('comment'),
        //         'user_id' => Auth::user()->id,
        //         'user_image' => Auth::user()->image,
        //         'pro_id' => $id
        //     ]);

        //     return redirect()->back()->with('success','Comment Added successfully!');
        // }else{
        //     return back()->withInput()->with('error','Something wrong');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment, $id)
    {
        $mcomment = Comment::where('user_id', Auth::user()->id);
        // if($comment->user_id == Auth::user()->id){
                        // $maincomment = Comment::where('user_id', Auth::user()->id)->where('id', $comment->id);

            $reply = ReplyComment::where('comment_id', $id);
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
