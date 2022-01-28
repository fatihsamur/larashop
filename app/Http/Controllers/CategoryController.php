<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function getCategory()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));
    }

    public function getSingleCategory($id)
    {
        $category = Category::find($id);
        return view('single_category', compact('category'));
    }
}
