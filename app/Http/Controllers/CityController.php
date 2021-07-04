<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=city::all();
        return response()->view('cms.cities.index',['cities'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('cms.cities.create');
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
            'name_ar' => 'required|string|min:3|max:30',
        ]);
        if (!$validator->fails()) {
            $city = new city();
            $city->name_ar = $request->get('name_ar');
            $isSaved = $city->save();
            return response()->json(['message' => $isSaved ? 'Created successfully' : "Failed to create"], $isSaved ? 201 : 400);
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(city $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(city $city)
    {
        //
        // $cities=city::get();
        return response()->view('cms.cities.edit',compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, city $city)
    {

        $validator = Validator($request->all(), [
            'name_ar' => 'required|string|min:3|max:30',
        ]);
        if (!$validator->fails()) {
            $city->name_ar = $request->get('name_ar');
            $isSaved = $city->save();
            return response()->json(['message' => $isSaved ? 'Updated successfully' : "Failed to update"], $isSaved ? 200 : 400);
        }
        else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(city $city)
    {
        //
        $isDeleted = $city->delete();
        return response()->json(['message'=>$isDeleted ?"Deleted successfully":"Failed to delete"],$isDeleted ? 200 : 400);
    }

}
