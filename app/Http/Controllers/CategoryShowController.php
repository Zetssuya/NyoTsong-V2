<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryShowController extends Controller
{
    //
    public function index()
    {
        $categories = Category::paginate(3);
        return view('admin.categories.category', compact('categories'));
    }

    // public function edit(Request $request, $id){
    //     $categories = Category:: findOrFail($id);
    //     return view('admin.users.edituser')->with('users', $users);
    // }
    
    public function destroy($id){
        $categories = Category:: findOrFail($id);
        $categories->delete();
        return redirect()->back()->with('msg','Category deleted successfully!');
    }

}
