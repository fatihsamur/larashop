<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // public functions
    public function index()
    {
        return view('home');
    }

    // admin functions
    public function dashboardPage()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('dashboard', compact('products', 'categories'));
    }

    // add product page
    public function addProductPage()
    {
        $categories = Category::all();
        return view('add_product', compact('categories'));
    }

    // add new product
    public function saveProduct(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image_path' => 'required',
            'category_id' => 'required',
        ]);
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->image_path = $request->input('image_path');
        $product->category_id = $request->input('category_id');
        $product->save();
        return redirect('/dashboard');
    }

    // delete product
    public function deleteProduct(Request $request)
    {
        $product_id = $request->id;
        $product = Product::find($product_id);
        if ($product) {
            $product->delete();
            return redirect('/dashboard');
        } else {
            dd("yok öyle bişe");
        }
    }

    // edit product page
    public function editProduct(Request $request)
    {
        $categories = Category::all();
        $product_id = $request->id;
        $product = Product::find($product_id);
        if ($product) {
            return view('edit_product', compact('product', 'categories'));
        } else {
            dd("yok öyle bişe");
        }
    }

    // update product
    public function updateProduct(Request $request)
    {
        $product_id = $request->id;
        $product = Product::find($product_id);

        if ($product) {
            $this->validate($request, [
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',
                'image_path' => 'required',
                'category_id' => 'required',
            ]);

            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->image_path = $request->input('image_path');
            $product->category_id = $request->input('category_id');
            $product->update();
            return redirect('/dashboard');
        } else {
            dd("yok öyle bişe");
        }
    }
}
