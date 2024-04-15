<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::orderBy('created_at','desc')->paginate(10);

        return view('admin.roles.index', ['roles' => $roles]);
    }

    public function create(){
        return view('admin.roles.create');
    }

    public function store(Request $request){
        $incomingFields = $request->validate([
            'name' => 'required',
            'slug' => ['required'],
        ]);

        $role = Role::create($incomingFields);

        return redirect()->route('admin.role.edit', ['role' => $role->id])->with('success', 'Ролята беше добавена успешно!');
    }

    public function edit(Role $role){
        return view('admin.roles.edit', compact('role'));
    }

    public function update(Role $role, Request $request){
         $incomingFields = $request->validate([
            'name' => 'required',
            'slug' => ['required'],
        ]);

        $role->update($incomingFields);

        return redirect()->back()->with('success', 'Ролята беше редактирана успешно!');
    }

    public function delete(Role $role){
        $role->delete();

        return redirect(route('admin.roles.index'))->with('success', 'Ролята беше изтрита успешно!');
    }
}
