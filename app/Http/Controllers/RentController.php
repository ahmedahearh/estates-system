<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rent = Rent::get();
        return response()->view('cms.rents.index', ['rents' => $rent]);
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
        return response()->view('cms.rents.create',compact('properties'));
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
            'name' => 'required|string|min:3|max:25',
            'price'=>'required|int',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'property_id' => 'required|numeric|exists:properties,id',

        ]);

        if (!$validator->fails()) {
            $rent = new Rent();
            $rent->name = $request->get('name');
            $rent->price = $request->get('price');
            $rent->property_id = $request->get('property_id');
            $rent->start_date = $request->get('start_date');
            $rent->end_date = $request->get('end_date');
            $isSaved = $rent->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function show(Rent $rent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function edit(Rent $rent)
    {
        //
        $properties=Property::all();
        return view('cms.rents.edit',['rents' => $rent,'properties'=>$properties]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rent $rent)
    {
        //
        $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:25',
            'price'=>'required|int',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'property_id' => 'required|numeric|exists:properties,id',

        ]);

        if (!$validator->fails()) {
            $rent->name = $request->get('name');
            $rent->price = $request->get('price');
            $rent->property_id = $request->get('property_id');
            $rent->start_date = $request->get('start_date');
            $rent->end_date = $request->get('end_date');
            $isSaved = $rent->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rent $rent)
    {
        //
        $isDeleted = $rent->delete();
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }
}
