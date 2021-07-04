<?php

namespace App\Http\Controllers;

use App\Models\Chalet;
use App\Models\Property;
use Illuminate\Http\Request;

class ChaletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chalet = Chalet::get();
        return response()->view('cms.chalets.index', ['chalets' =>$chalet]);
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
        return response()->view('cms.chalets.create',compact('properties'));
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
            'type' => 'required|string|min:3|max:35',
            'property_id' => 'required|numeric|exists:properties,id',
        ]);

        if (!$validator->fails()) {
            $chalet= new Chalet();
            $chalet->type = $request->get('type');
            $chalet->property_id = $request->get('property_id');
            $chalet->active = $request->get('active');
            $isSaved = $chalet->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chalet  $chalet
     * @return \Illuminate\Http\Response
     */
    public function show(Chalet $chalet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chalet  $chalet
     * @return \Illuminate\Http\Response
     */
    public function edit(Chalet $chalet)
    {
        //
        $properties=Property::all();
        return response()->view('cms.chalets.edit', ['chalets' => $chalet,'properties'=>$properties ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chalet  $chalet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chalet $chalet)
    {
        //
        $validator = Validator($request->all(), [
            'type' => 'required|string|min:3|max:35',
            'property_id' => 'required|numeric|exists:properties,id',

        ]);

        if (!$validator->fails()) {
            $chalet->type = $request->get('type');
            $chalet->property_id = $request->get('property_id');
            $chalet->active = $request->get('active');
            $isSaved = $chalet->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chalet  $chalet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chalet $chalet)
    {
        //
        $isDeleted = $chalet->delete();
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }

}
