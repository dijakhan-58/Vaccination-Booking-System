<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::with("roles")->get();
        return view("module.user.index", compact("user"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::where("guard_name", "web")->get();
        return view("module.user.create", compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'password' => Hash::make($req->password)


        ]);
        $user->assignRole($req->role);
        return redirect()->route("user_view");
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
        $user_item = User::with('roles')->findOrFail($id);
        $roles = Role::where("guard_name", "web")->get();

        return view("module.user.edit", compact('user_item', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, $id)
    {
        $password = "";
        $user = User::where("id", $id)->first();

        if ($req->password != null) {
            $password = Hash::make($req->password);
        } else {
            $password = $user->password;
        }

        $user->update([
            'name'     => $req->name,
            'email'    => $req->email,
            'phone'    => $req->phone,
            'password' => $password
        ]);

        $user->syncRoles($req->role);

        return redirect()->route("user_view");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = User::where("id", $id);
        $role->delete();
        return redirect()->route("user_view");
    }
}