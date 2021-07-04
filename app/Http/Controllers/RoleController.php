<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
// use Spatie\Permission\Contracts\Role;
// use Spatie\Permission\Models\Role as ModelsRole;
use Symfony\Contracts\Service\Attribute\Required;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles=Role::withCount('permissions')->get();
        return view('cms.spatie.roles.index', ['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cms.spatie.roles.create');
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
            $role = new Role();
            $role ->name=$request->get('name');
            $role ->guard_name=$request->get('guard_name');
            $isSaved = $role->save();
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
        $role = Role::find($id);
        return view('cms.spatie.roles.edit', ['roles'=>$role]);
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
            $role = Role::find($id);
            $role ->name=$request->get('name');
            $role ->guard_name=$request->get('guard_name');
            $isSaved = $role->save();
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
        $isDeleted = Role::destroy($id);
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }
}
