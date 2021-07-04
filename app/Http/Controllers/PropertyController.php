<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $property = Property::get();
        return response()->view('cms.properties.index', ['properties' => $property]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cms.properties.create');
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
            'name' => 'required|string|min:3|max:35',
            'addres' => 'required|string|min:3|max:35',
            'description'=>'required|string|min:3|max:100',
            'total_price'=>'required|int',
            'lowest_price'=>'required|int',
            'number_of_months'=>'required|int|min:1|max:12',
            'the_total_area'=>'required|int',

        ]);

        if (!$validator->fails()) {
            $property = new Property();
            $property->name = $request->get('name');
            $property->addres = $request->get('addres');
            $property->description = $request->get('description');
            $property->total_price = $request->get('total_price');
            $property->lowest_price = $request->get('lowest_price');
            $property->number_of_months = $request->get('number_of_months');
            $property->the_total_area = $request->get('the_total_area');
            $property->active = $request->get('active');
            $isSaved = $property->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        // dd($property->all());
        //['properties' => $property ]
        // $property = Property::all();
        return view('cms.properties.edit',['properties' => $property]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
        $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:35',
            'addres' => 'required|string|min:3|max:35',
            'description'=>'required|string|min:3|max:100',
            'total_price'=>'required|int',
            'lowest_price'=>'required|int',
            'number_of_months'=>'required|int|min:1|max:12',
            'the_total_area'=>'required|int',

        ]);

        if (!$validator->fails()) {

            $property->name = $request->get('name');
            $property->addres = $request->get('addres');
            $property->description = $request->get('description');
            $property->total_price = $request->get('total_price');
            $property->lowest_price = $request->get('lowest_price');
            $property->number_of_months = $request->get('number_of_months');
            $property->the_total_area = $request->get('the_total_area');
            $property->active = $request->get('active');
            $isSaved = $property->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
        $isDeleted = $property->delete();
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }

}
