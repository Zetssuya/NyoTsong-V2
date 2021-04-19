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
        $saledata = Sale::latest()->paginate(10);
        $dondata = Donation::latest()->paginate(10);
        
        // $comments = Comment::latest('created_at')->get();

        // $id = auth()->user()->id;
        // $users = User::where('id', $id)->first();


        return view('front.index', compact('saledata','dondata'));
    }

    public function searches(Request $request){
        $saledata = Sale::paginate(10);
        $dondata = Donation::paginate(10);
        $search = $request->search;
        $saleresult = Sale::where ( 'name', 'LIKE', '%' . $search . '%' )->orWhere ( 'categories', 'LIKE', '%' . $search . '%' )->get ();
        $donresult = Donation::where ( 'name', 'LIKE', '%' . $search . '%' )->get ();
        // dd($result);
        if($search !=""){
            if (count ( $saleresult ) > 0 OR count ( $donresult ) > 0  ){
                return view('front.index', compact('saleresult', 'donresult', 'search', 'saledata','dondata'));
            }
            else{
                return redirect()->back()->with('msg', 'No Details found. Try to search again !' );
            }
            // return view('front.index', compact('saledata','dondata'))->with('msg', 'No Details found. Try to search again !' );
        }
        //     return redirect()->back();
            return view('front.index', compact('saledata','dondata'));
    }
}
