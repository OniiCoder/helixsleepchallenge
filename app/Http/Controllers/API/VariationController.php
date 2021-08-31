<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Variation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\VariationResource;

class VariationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variations = Variation::all();
        return response([ 'data' => VariationResource::collection($variations), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'product_id' => 'required',
            'name' => 'required|max:255',
            'image_url' => 'required|max:500',
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $variation = Variation::create($data);

        return response(['data' => new VariationResource($variation), 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Variation  $variation
     * @return \Illuminate\Http\Response
     */
    public function show(Variation $variation)
    {
        return response(['data' => new VariationResource($variation), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Variation  $variation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variation $variation)
    {
        $variation->update($request->all());

        return response(['data' => new VariationResource($variation), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Variation  $variation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variation $variation)
    {
        $variation->delete();

        return response(['message' => 'Deleted']);
    }
}
