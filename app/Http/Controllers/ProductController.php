<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(){

        $products = Product::all();

        return response()->json([
            'Products' => $products,
        ]);
    }

    public function store(Request $request){

    }

    public function show(string $id){

    }

    public function update(Request $request, string $id){

    }

    public function destroy(string $id){


    }
}
