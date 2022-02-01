<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // get all categories
    public function getCategory()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));
    }
    // get single category
    public function getSingleCategory($id)
    {
        $category = Category::find($id);
        return view('single_category', compact('category'));
    }

    // add category page
    public function addCategoryPage()
    {
        return view('add_category');
    }

    // add new category
    public function saveCategory(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();
        return redirect('/categories');
    }

    // delete category function
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories');
    }
    // edit category page
    public function updateCategoryPage($id)
    {
        $category = Category::find($id);
        if ($category) {
            return view('edit_category', compact('category'));
        } else {
            dd("yok öyle bişe");
        }
    }

    // update category function
    public function updateCategory(Request $request)
    {
        $category_id = $request->id;
        $category = Category::find($category_id);
        if ($category) {
            $this->validate($request, [
                'name' => 'required',
            ]);
            $category->name = $request->input('name');
            $category->update();
            return redirect('/categories');
        } else {
            dd("yok öyle bişe");
        }
    }
}
