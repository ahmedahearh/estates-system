<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Property;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $apartment = Apartment::get();
        return response()->view('cms.apartments.index', ['apartments' => $apartment]);
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
        return view('cms.apartments.create',compact('properties'));
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
            'which_floor' => 'required|string|min:5|max:20',
            'property_id' => 'required|numeric|exists:properties,id',
        ]);

        if (!$validator->fails()) {
            $apartment = new Apartment();
            $apartment->which_floor = $request->get('which_floor');
            $apartment->property_id = $request->get('property_id');
            $apartment->active = $request->get('active');
            $isSaved = $apartment->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        //
        // $apartment=Apartment::all();
        $properties=Property::all();
        return view('cms.apartments.edit',['apartments' => $apartment,'properties'=>$properties]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartment $apartment)
    {
        //
        $validator = Validator($request->all(), [
            'which_floor' => 'required|string|min:5|max:20',
            'property_id' => 'required|numeric|exists:properties,id',
        ]);

        if (!$validator->fails()) {
            $apartment->which_floor = $request->get('which_floor');
            $apartment->property_id = $request->get('property_id');
            $apartment->active = $request->get('active');
            $isSaved = $apartment->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        //
        $isDeleted = $apartment->delete();
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }

}
