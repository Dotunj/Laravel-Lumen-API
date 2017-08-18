<?php

namespace App\Http\Controllers;

use App\Product;


class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
     
     $Products = Product::all();

     return response()->json($Products);

     public function create(Request $request)
     {
       $this->validate($request, [
       'name'=>'required'

        ])
     }


    }

    //
}
