<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\SaleDetail;
use App\Sale;
use App\Comment;
use App\ReplyComment;
use Illuminate\Http\Request;
use App\Notifications\UserCommented;
use App\Notifications\UserCommentReplied;
use Illuminate\Support\Facades\Notification;

class SaleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        
        $saledata = Sale:: findOrFail($id);
        $uid = $saledata->user_id;
        // $pid = $saledata->id;
        

        $users = User::where('id', $uid)->first();
        $user = User::where('id', Auth::user()->id)->first();
        

        $comments = Comment::latest('created_at')->get();
        // $cid = Comment::all();
        // $cuid = $cid[3]->user_id;
        // $commentuser = User::where('id', $cuid);
        
        return view('front.proddetails.saledetail', compact('users','saledata','comments','user'));
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
        $saledata = Sale:: findOrFail($id);
        
        $request->validate([
            'comment' => 'required',
        ]);
        if (Auth::check()) {
            Comment::create([
                'name' => Auth::user()->name,
                'comment' => $request->input('comment'),
                'user_id' => Auth::user()->id,
                'user_image' => Auth::user()->image,
                'pro_id' => $saledata->id
            ]);

            $userid = $saledata->user_id;
            // for notification
            // $cid = User::find(Auth::user()->id);
            $pid =$saledata->id;
            $commented = $saledata->name;
            $notific = $commented.' has a comment!';
            $user = User::where('id', $userid)->first();
            // Notification::send($user, new UserCommented($request->comment));
            $user->notify(new UserCommented($saledata));
            // $user->notify(new UserCommented($request->comment));
             

            return redirect()->back()->with('success','Comment Added successfully!');
        }else{
            return back()->withInput()->with('error','Something wrong');
        }
    }

    public function replystore(Request $request, $id)
    {
        $prodata = Sale:: findOrFail($id);
        if (Auth::check()) {
            ReplyComment::create([
                'comment_id' => $request->input('comment_id'),
                'name' => $request->input('name'),
                'reply' => $request->input('reply'),
                'user_id' => Auth::user()->id,
                'user_image' => Auth::user()->image
            ]);

            
            
            $prev = Comment::find($request->input('comment_id'));
            $userid = $prev->user_id;
            // for notification
            $user = User::where('id', $userid)->first();
            // Notification::send($user, new UserCommented($request->comment));
            $user->notify(new UserCommentReplied($prodata));

            return redirect()->back()->with('success','Reply added');
        }

        return back()->withInput()->with('error','Something wronmg');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\SaleDetail  $saleDetail
     * @return \Illuminate\Http\Response
     */
    public function show(SaleDetail $saleDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SaleDetail  $saleDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(SaleDetail $saleDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SaleDetail  $saleDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaleDetail $saleDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SaleDetail  $saleDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaleDetail $saleDetail)
    {
        //
    }
}
