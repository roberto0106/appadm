<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return ProductResource::collection($product);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $new_product = Product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'category_id'=>$request->category_id,
            'status'=>$request->status,
        ]);

        return new ProductResource($new_product);
    }


    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        $product = Product::find($product->id);
        $product->fill($request->all())->save();

        return new ProductResource($product);
    }


    public function destroy(Product $product)
    {
        $product = Product::find($product->id);
        $product->delete();

        return response()->json(['message'=>'Product is gone']);
    }
}
