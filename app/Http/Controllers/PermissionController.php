<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $permission = Permission::all();
        return response()->view('cms.spatie.permissions.index',['permissions'=>$permission]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cms.spatie.permissions.create');
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
            'name'=>'required|string|max:100',
            'guard_name'=>'required|string|in:web:users,admins'
        ]);
        if ($validator->fails()) {
            $permission = new Permission();
            $permission ->name=$request->get('name');
            $permission ->guard_name=$request->get('guard_name');
            $isSaved = $permission->save();
            return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $permission = Permission::find($id);
        return view('cms.spatie.permissions.edit', ['permissions'=>$permission]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator($request->all(), [
            'name'=>'required|string|max:100',
            'guard_name'=>'required|string|in:web:users,admins'
        ]);
        if ($validator->fails()) {
            $permission = Permission::find($id);
            $permission ->name=$request->get('name');
            $permission ->guard_name=$request->get('guard_name');
            $isSaved = $permission->save();
            return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $isDeleted = Permission::destroy($id);
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }
}
