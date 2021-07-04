<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $store = Store::get();
        return response()->view('cms.stores.index', ['stores' => $store]);
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
        return response()->view('cms.stores.create',compact('properties'));
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
            $store= new Store();
            $store->type = $request->get('type');
            $store->property_id = $request->get('property_id');
            $store->active = $request->get('active');
            $isSaved = $store->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $stores
     * @return \Illuminate\Http\Response
     */
    public function show(Store $stores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $stores
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        // ['stores' => $stores ]
        // $stores = Store::all();
        $properties=Property::all();
        return view('cms.stores.edit',['store' => $store,'properties'=>$properties ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $stores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        //
        $validator = Validator($request->all(), [
            'type' => 'required|string|min:3|max:35',
            'property_id' => 'required|numeric|exists:properties,id',
        ]);

        if (!$validator->fails()) {
            $store->type = $request->get('type');
            $store->property_id = $request->get('property_id');
            $store->active = $request->get('active');
            $isSaved = $store->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $stores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
        $isDeleted = $store->delete();
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }

}
