<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function saveProduct(Request $request)
    {     
        $this->validate($request,[
           'name'=>'required',
           'description'=>'required',
           'price'=>'required',
           'image_path'=>'required'
        ]);

        $product = new Product();
        $product ->name = $request->input('name');
        $product ->description = $request->input('description');
        $product ->price = $request->input('price');
        $product ->image_path = $request->input('image_path');                       
        $product ->save();      
                
        return ["message"=> "yazdım onii"] ;
      
    }

  
}
