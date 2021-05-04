<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\Donation;
use App\CommentDon;
use App\ReplyDonComment;
use App\DonationDetail;
use Illuminate\Http\Request;
use App\Notifications\UserDonCommented;
use App\Notifications\UserDonCommentedReplied;

class DonationDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $dondata = Donation:: findOrFail($id);
        $uid = $dondata->user_id;
        $users = User::where('id', $uid)->first();
        $user = User::where('id', Auth::user()->id)->first();


        $comments = CommentDon::latest('created_at')->get();
        $replies = ReplyDonComment::latest('created_at')->get();
        return view('front.proddetails.donationdetail', compact('users','dondata','comments','replies','user'));
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
        $dondata = Donation:: findOrFail($id);
        $pid =$dondata->id;
        $request->validate([
            'comment' => 'required',
        ]);
        if (Auth::check()) {
            CommentDon::create([
                'name' => Auth::user()->name,
                'comment' => $request->input('comment'),
                'user_id' => Auth::user()->id,
                'user_image' => Auth::user()->image,
                'pro_id' => $dondata->id
            ]);

            $userid = $dondata->user_id;
            // for notification
            $user = User::where('id', $userid)->first();
            // Notification::send($user, new UserCommented($request->comment));
            $user->notify(new UserDonCommented($dondata));
            return redirect()->back()->with('success','Comment Added successfully!');
        }else{
            return back()->withInput()->with('error','Something wrong');
        }
    }

    public function replydonstore(Request $request, $id)
    {
        if (Auth::check()) {
            ReplyDonComment::create([
                'comment_id' => $request->input('comment_id'),
                'name' => $request->input('name'),
                'reply' => $request->input('reply'),
                'user_id' => Auth::user()->id,
                'user_image' => Auth::user()->image
            ]);
            $dondata = Donation:: findOrFail($id);
            $userid = $dondata->user_id;
            // for notification
            $user = User::where('id', $userid)->first();
            // Notification::send($user, new UserCommented($request->comment));
            $user->notify(new UserDonCommentedReplied($dondata));
            return redirect()->back()->with('success','Reply added');
        }

        return back()->withInput()->with('error','Something wronmg');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DonationDetail  $donationDetail
     * @return \Illuminate\Http\Response
     */
    public function show(DonationDetail $donationDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DonationDetail  $donationDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(DonationDetail $donationDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DonationDetail  $donationDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DonationDetail $donationDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DonationDetail  $donationDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(DonationDetail $donationDetail)
    {
        //
    }
}
