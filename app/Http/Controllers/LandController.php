<?php

namespace App\Http\Controllers;

use App\Models\Land;
use App\Models\Property;
use Illuminate\Http\Request;

class LandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $land = Land::get();
        return response()->view('cms.lands.index', ['lands' => $land]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $properties=Property::all();
        return response()->view('cms.lands.create',compact('properties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator($request->all(), [
            'price_of_one_meter' => 'required|numeric',
            'property_id' => 'required|numeric|exists:properties,id',
        ]);

        if (!$validator->fails()) {
            $land = new Land();
            $land->price_of_one_meter = $request->get('price_of_one_meter');
            $land->property_id = $request->get('property_id');
            $land->active = $request->get('active');
            $isSaved = $land->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function show(Land $land)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function edit(Land $land)
    {
        //
        // $land = Land::all();
        $properties=Property::all();
        return view('cms.lands.edit', ['lands' => $land ,'properties'=>$properties]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Land $land)
    {
        //
        $validator = Validator($request->all(), [
            'price_of_one_meter' => 'required|numeric',
            'property_id' => 'required|numeric|exists:properties,id',
        ]);

        if (!$validator->fails()) {
            $land->price_of_one_meter = $request->get('price_of_one_meter');
            $land->property_id = $request->get('property_id');
            $land->active = $request->get('active');
            $isSaved = $land->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function destroy(Land $land)
    {
        //
        $isDeleted = $land->delete();
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }

}
