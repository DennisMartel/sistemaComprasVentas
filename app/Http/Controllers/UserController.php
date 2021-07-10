<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{

    public function index()
    {
        $users = User::get();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::get();
        return view('admin.user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        $user->roles()->sync($request->get('roles'));
        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    public function edit(User $user)
    {
        $roles = Role::get();
        return view('admin.user.edit', compact('roles', 'user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        $user->roles()->sync($request->get('roles'));
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();   
        return redirect()->route('users.index');
    }
}
