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
       $this->validate($request, [
       'name'=>'required|min:5',
       'price'=>'required|min:3',
       'description'=>'required|min:7',
     ]);
       $product = new Product;

       $product->name= $request->name;
       $product->price = $request->price;
       $product->description= $request->description;
       if($product->save()) {
        return response()->json([
         'data'=>'stored',
          'status'=>200,
        ]);
       } else {
        return response()->json([
          'error'=>'could not store',
           'status'=>500,
        ]);
       } 
     }

     public function show($id)
     {
        $product = Product::find($id);

        return response()->json($product);
     }

     public function update(Request $request, $id)
     {
        $product= Product::find($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        if($product->save()){
            return response()->json([
               'data'=> 'updated successfully',
               'status'=>200,
            ]);
        }else{
            return response()->json([
             'error'=>'could not update',
              'status'=>500,
             ]);
        }
     }

     public function destroy($id)
     {
        $product = Product::findorFail($id)->delete();

         return response()->json($product);
     }

     public function test()
     {
        return response()->json([
         'success'=> 'it works',
          'status'=>200,
        ]);
     }


    }

    //

