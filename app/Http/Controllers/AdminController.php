<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admins = Admin::get();
        return response()->view('cms.admins.index', ['admins' => $admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('cms.admins.create');
        // $roles = Role::where('guard_name', 'admin')->get();
        // return response()->view('cms.admins.create', ['cities' => $cities, 'roles' => $roles]);
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
            // 'city_id' => 'required|numeric|exists:cities,id',
            'first_name' => 'required|string|min:3|max:35',
            'last_name' => 'required|string|min:3|max:35',
            'mobile' => 'required|numeric',
            'email' => 'required|email|unique:admins,email',
            'birth_date' => 'required|date',
            'gender' => 'required|string|max:1|in:M,F',
        ]);

        if (!$validator->fails()) {
            $admin = new Admin();
            $admin->email = $request->get('email');
            $admin->password = Hash::make("password");
            $admin->first_name = $request->get('first_name');
            $admin->last_name = $request->get('last_name');
            $admin->mobile = $request->get('mobile');
            $admin->birth_date = $request->get('birth_date');
            $admin->gender = $request->get('gender');
            $isSaved = $admin->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
        // $roles = Role::where('guard_name', 'admin')->get();
        // $cities = City::all();
        // return response()->view('cms.admins.edit', [
        //     'admin' => $admin, 'cities' => $cities, 'roles' => $roles
        // ]);
        // $admin = Admin::all();
        return response()->view('cms.admins.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $validator = Validator($request->all(), [
            // 'role_id' => 'required|exists:roles,id',
            // 'city_id' => 'required|numeric|exists:cities,id',
            'first_name' => 'required|string|min:3|max:35',
            'last_name' => 'required|string|min:3|max:35',
            'mobile' => 'required|numeric',
            'email' => 'required|email',
            'birth_date' => 'required|date',
            'gender' => 'required|string|max:1|in:M,F',
        ]);

        if (!$validator->fails()) {
            $admin->email = $request->get('email');
            $admin->password = Hash::make("password");
            $admin->first_name = $request->get('first_name');
            $admin->last_name = $request->get('last_name');
            $admin->mobile = $request->get('mobile');
            $admin->birth_date = $request->get('birth_date');
            $admin->gender = $request->get('gender');
            // $user->city_id = $request->get('city_id');
            $isSaved = $admin->save();
                return response()->json(['message' => $isSaved ? "Saved successfully" : "Failed to save"], $isSaved ? 201 : 400);

        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
        $isDeleted = $admin->delete();
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }
}
