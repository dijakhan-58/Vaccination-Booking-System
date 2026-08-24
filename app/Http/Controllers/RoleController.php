<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;  

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $role = Role::with("permissions")->get();
        return view("module.role.index", compact("role"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $permission_data = Permission::where("guard_name", "web")->get();
        return view("module.role.create", compact("permission_data"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $role = Role::create(
            [
                'name' => $req->rolename
            ]
        );
        $role->syncPermissions($req->permission);
        return redirect()->route("role_view");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $permission_data = Permission::where("guard_name", "web")->get();
        $findrole = Role::where("id", $id)->first();
        return view("module.role.edit", compact("findrole", "permission_data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        $role = Role::where("id", $id)->first();
        $role->update([
            'name' => $req->rolename
        ]);
        $role->syncPermissions($req->permission);
        return redirect()->route("role_view");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::where("id",$id);
        $role->delete();
          return redirect()->route("role_view");
    }
}