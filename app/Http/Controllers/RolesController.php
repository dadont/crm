<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class RolesController extends Controller
{
    public function create(Request $request) 
    {
        Role::create($request->only('name'));
        return response()->json([$request->only('name')]); 
    }
    public function update(Request $request, Role $role) 
    {
        $role->update($request->only('name'));
        return response()->json($role); 
    }
    public function delete($id) 
    {
        Role::find($id)->delete();
        return response()->json(true); 
    }

    public function index(Role $role) 
    {
        return Role::get(); 
        //return response()->json(['data' => $role]); 
    }

    public function show(Role $role) 
    {
        return response()->json(['data' => $role]); 
    }

    public function users(Role $role) 
    {
        return $role->users->map->name;
    }
}
