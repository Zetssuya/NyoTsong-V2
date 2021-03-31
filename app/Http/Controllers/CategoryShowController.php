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

}
