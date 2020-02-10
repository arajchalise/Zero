<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  
    public function index()
    {
        return Product::all();
    }
    
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    
    public function show(Product $product)
    {
        return $product;
    }

    public function addToCart(Request $request, Product $product)
    {
        $cart = array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'qty' => $request->qty,
            'amt' => $product->price*$request->qty,
        );

        return $cart;

    }
    
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return response()->json($product, 200);
    }

   
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }
}
