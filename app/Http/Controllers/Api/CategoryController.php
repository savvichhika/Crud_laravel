<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ShowCategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::list();
        $categories = CategoryResource::collection($categories);
        return response()->json([
            "success"=>true,
            "data" => $categories,
            "message" => 'List of categories',

        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        //
        Category::store($request);
        return response()->json([
            "success"=>true,
            "data" => true,
            "message" => 'Category created',

        ],200);
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $categories = Category::find($id);
        $categories = new ShowCategoryResource($categories);
        return response()->json([
            "success"=>true,
            "data" => $categories,
            "message" => 'List of categories',
        ]);

   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)

    {
        //
         Category::store($request,$id);
         return response()->json([
            "success"=>true,
            "data" => true,
            "message" => 'Category updated',
         ],200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Category::destroy($id);
        return response()->json([
            "success"=>true,
            "data" => true,
            "message" => 'Category deleted',
        ],200);
    }
}
