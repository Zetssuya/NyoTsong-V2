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
        $pid =$saledata->id;
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

            // $comment = new Comment;
            // // for notification
            // $user = $saledata->user_id;
            // if(\Notification::send($user, new UserCommented(Comment::latest('id')->first()))){
            //     return back();
            // }

            return redirect()->back()->with('success','Comment Added successfully!');
        }else{
            return back()->withInput()->with('error','Something wrong');
        }
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
