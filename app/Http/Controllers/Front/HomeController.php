<?php

namespace App\Http\Controllers\Front;
use App\User;
use Auth;
use App\Product;
use App\Sale;
use App\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Pagination\Paginator;
// use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function index()
    {
        $saledata = Sale::latest()->paginate(4);
        $dondata = Donation::latest()->paginate(4);
        
        
        if(!auth()->check()){
            $user = User::find('id');
            return view('front.index', compact('saledata','dondata','user'));
        }
        else{
            $user = User::where('id', Auth::user()->id)->first();
            return view('front.index', compact('saledata','dondata','user'));
        }

        
    }

    public function searches(Request $request){
        $saledata = Sale::paginate(10);
        $dondata = Donation::paginate(10);
        $user = User::where('id', Auth::user()->id)->first();

        $search = $request->search;
        $saleresult = Sale::where ( 'name', 'LIKE', '%' . $search . '%' )->orWhere ( 'categories', 'LIKE', '%' . $search . '%' )->get ();
        $donresult = Donation::where ( 'name', 'LIKE', '%' . $search . '%' )->get ();
        // dd($result);
        if($search !=""){
            if (count ( $saleresult ) > 0 OR count ( $donresult ) > 0  ){
                return view('front.index', compact('saleresult', 'donresult', 'search', 'saledata','dondata','user'));
            }
            else{
                return redirect()->back()->with('msg', 'No Details found. Try to search again !' );
            }
            // return view('front.index', compact('saledata','dondata'))->with('msg', 'No Details found. Try to search again !' );
        }
        //     return redirect()->back();
            return view('front.index', compact('saledata','dondata','user'));
    }

    public function markingread($id){
        $user = User::where('id', Auth::user()->id)->first();
        $users = User::where('id', Auth::user()->id)->first();
        $user->unreadNotifications->markAsRead();
        $users->notifications()->where('id',$id)->get()->first()->delete();
        return redirect()->back();
    }
}
