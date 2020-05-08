<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return CategoryResource::collection($categories);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $new_category = Category::create([
           'name' =>  $request->name,
           'description' =>  $request->description,
           'status' =>  $request->status,
        ]);
        return new CategoryResource($new_category);

    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        $category = Category::find($category->id);
        $category->fill($request->all())->save();

        return new CategoryResource($category);
    }

    public function destroy(Category $category)
    {
        $category = Category::find($category->id);
        $category->delete();

        return response()->json(['message' => 'Category is gone',]);
    }

}
