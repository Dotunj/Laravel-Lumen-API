<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
     
     $products = Product::all();

     return response()->json($products);

    }

     public function create(Request $request)
     {
        $product = new Product;

       $product->name= $request->name;
       $product->price = $request->price;
       $product->description= $request->description;
       
       $product->save();

       //$product = Product::create($request->all());

       return response()->json($product);
     }

     public function show($id)
     {
        $product = Product::find($id);

        return response()->json($product);
     }

     public function update(Request $request, $id)
     { 
        $product= Product::find($id);
        
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();
        return response()->json($product);
     }

     public function destroy($id)
     {
        $product = Product::find($id);
        $product->delete();

         return response()->json('product removed successfully');
     }


    }

    

