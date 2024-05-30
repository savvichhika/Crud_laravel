<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PromotionResource;
use App\Http\Resources\ShowPromotionResource;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $promotions = Promotion::list();
        $promotions = PromotionResource::collection($promotions);
        // $promotion = CategoryResource::collection($promotion);
        return response()->json([
            "success"=>true,
            "data" => $promotions,
            "message" => 'List of categories',

        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Promotion::store($request);
        return response()->json([
            "success"=>true,
            "data" => true,
            "message" => 'promotoin created',

        ],200);
       
    }
    /**
     * Store a newly created resource in storage.
     */
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $promotions = Promotion::find($id);
        $promotions = new ShowPromotionResource($promotions);

        return response()->json([
            "success"=>true,
            "data" => $promotions,
            "message" => 'List of categories',

        ],200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Promotion::store($request, $id);
        return response()->json([
            "success"=>true,
            "data" => true,
            "message" => 'promotoin updated',

        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
