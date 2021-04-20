<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id, UserDetail $userDetail)
    {
        $user = User::find($id);
        
        
        // to show user rating average 
        $uid = UserDetail::where('rated_user', $id); 
        $numratings = $uid->count();
        $sumratings = $uid->sum('rating');
        // $numrates = count($uid->id);
        // $totalrates = sum($uid->rating);
        
            if($numratings > 0){
                $avgrating =  $sumratings/$numratings;
                return view('front.userdetail.userdetail', compact('user','avgrating'));
            } 
            // dd($avgrating);
            else{
                $avgrating = "The User have not been rated yet!";
                return view('front.userdetail.userdetail', compact('user','avgrating'));
            }
        
     
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
        $user = User::find($id);
        $loggeduser = Auth::user()->id;
        // dd($loggeduser);
        // $sameuser = User::where('id', $user);
        $alreadyrated = UserDetail::where('rater_user', $loggeduser)->get();
        if($id !=  $loggeduser){
            // dd($id !=  $loggeduser);
            //  dd (count ( $alreadyrated ));
            if( count ( $alreadyrated ) < 1){
                $request->validate([
                    'rating' => 'required',
                ]);
        
                // Save the data
                UserDetail::create([
                    'rater_user' => Auth::user()->id,
                    'rated_user' =>$user->id,
                    'rating' => $request->input('rating')
                ]);
                return redirect()->back()->with('msg', 'You have rated the user sucessfully!');
            }
            else{
                return redirect()->back()->with('msg', 'You have already rated the user!');
            }
        }else{
            return redirect()->back()->with('msg', 'You cannot rate yourself!');
        }
        
        // Validate the user
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDetail $userDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDetail $userDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetail $userDetail)
    {
        //
    }
}
