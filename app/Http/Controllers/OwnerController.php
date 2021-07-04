<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $owner = Owner::get();
        return response()->view('cms.owners.index', ['owners' => $owner]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return response()->view('cms.owners.create',compact('cities'));
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
            // 'role_id' => 'required|exists:roles,id',
            'city_id' => 'required|numeric|exists:cities,id',
            'first_name' => 'required|string|min:3|max:35',
            'last_name' => 'required|string|min:3|max:35',
            'mobile' => 'required|numeric',
            'email' => 'required|email|unique:admins,email',
            'birth_date' => 'required|date',
            'gender' => 'required|string|max:1|in:M,F',
        ]);

        if (!$validator->fails()) {
            $owner = new Owner();
            $owner->email = $request->get('email');
            $owner->password = Hash::make("password");
            $owner->first_name = $request->get('first_name');
            $owner->last_name = $request->get('last_name');
            $owner->mobile = $request->get('mobile');
            $owner->birth_date = $request->get('birth_date');
            $owner->gender = $request->get('gender');
            $owner->cities_id = $request->get('city_id');
            $isSaved = $owner->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        $cities=City::all();
        return response()->view('cms.owners.edit',compact('owner','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        //
        $validator = Validator($request->all(), [
            // 'role_id' => 'required|exists:roles,id',
            'city_id' => 'required|numeric|exists:cities,id',
            'first_name' => 'required|string|min:3|max:35',
            'last_name' => 'required|string|min:3|max:35',
            'mobile' => 'required|numeric',
            'email' => 'required|email',
            'birth_date' => 'required|date',
            'gender' => 'required|string|max:1|in:M,F',
        ]);

        if (!$validator->fails()) {
            $owner->email = $request->get('email');
            $owner->password = Hash::make("password");
            $owner->first_name = $request->get('first_name');
            $owner->last_name = $request->get('last_name');
            $owner->mobile = $request->get('mobile');
            $owner->birth_date = $request->get('birth_date');
            $owner->gender = $request->get('gender');
            $owner->cities_id = $request->get('city_id');
            $isSaved = $owner->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        //
        $isDeleted = $owner->delete();
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }

}
