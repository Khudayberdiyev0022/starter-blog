<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(): View
  {
    $roles = Role::query()->get();

    return view('admin.roles.index', compact('roles'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(): View
  {
    $permissions = Permission::query()->get();

    return view('admin.roles.create', compact('permissions'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request): RedirectResponse
  {
    dd($request->all());

    $role = Role::query()->firstOrCreate($request->validate(['name' => 'required|string']));
    $role->givePermissionTo($request->permissions);

//    $role->syncPermissions($request->permissions);
    return redirect()->route('admin.roles.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Role $role): View
  {
    return view('admin.roles.show', compact('role'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Role $role): View
  {
    return view('admin.roles.edit', compact('role'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Role $role): RedirectResponse
  {
    //      dd($request->all());
    $data = $request->validate([
      'name' => 'required|string',
    ]);

//      dd($data);
    $role->update($data);

    return redirect()->route('admin.roles.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Role $role): RedirectResponse
  {
    $role->delete();

    return redirect()->route('admin.roles.index');
  }
}
