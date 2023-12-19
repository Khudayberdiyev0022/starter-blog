<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(): View
  {
    $categories = Category::query()->latest()->get();

    return view('admin.categories.index', compact('categories'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(): View
  {
    return view('admin.categories.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request): RedirectResponse
  {
    $data = $request->validate([
      'title'            => 'required|string',
      'slug'             => 'required|unique:categories,slug',
      'description'      => 'nullable|string',
      'status'           => 'required|integer',
      'image'            => 'nullable|image|mimes:png,jpg',
      'order'            => 'nullable|integer',
      'meta_title'       => 'nullable|string',
      'meta_description' => 'nullable|string',
      'meta_keyword'     => 'nullable|string',
    ]);

    $data['order'] = $data['order'] ?? 0;
    if ($request->hasFile('image')) {
    }

    Category::query()->firstOrCreate($data);

    return redirect()->route('admin.categories.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Category $category): View
  {
    return view('admin.categories.show', compact('category'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Category $category): View
  {
    return view('admin.categories.edit', compact('category'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Category $category): RedirectResponse
  {
    $data = $request->all();

    $category->update($data);

    return redirect()->route('admin.categories.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Category $category): RedirectResponse
  {
    $category->delete();

    return redirect()->route('admin.categories.index');
  }
}
