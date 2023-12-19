<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TagController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(): View
  {
    $tags = Tag::query()->get();

    return view('admin.tags.index', compact('tags'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(): View
  {
    return view('admin.tags.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request): RedirectResponse
  {
    $data          = $request->validate([
      'title'            => 'required|string',
      'slug'             => 'required|unique:categories,slug',
      'description'      => 'nullable|string',
      'status'           => 'required|integer',
      'order'            => 'nullable|integer',
      'meta_title'       => 'nullable|string',
      'meta_description' => 'nullable|string',
      'meta_keyword'     => 'nullable|string',
    ]);

    $data['order'] = $data['order'] ?? 0;

    Tag::query()->firstOrCreate($data);

    return redirect()->route('admin.tags.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Tag $tag): View
  {
    return view('admin.tags.show', compact('tag'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Tag $tag): View
  {
    return view('admin.tags.edit', compact('tag'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Tag $tag): RedirectResponse
  {
    $id   = $tag->id;
    $data = $request->validate([
      'title'            => 'required|string',
      'slug'             => "required|unique:categories,slug,$id",
      'description'      => 'nullable|string',
      'status'           => 'required|integer',
      'order'            => 'nullable|integer',
      'meta_title'       => 'nullable|string',
      'meta_description' => 'nullable|string',
      'meta_keyword'     => 'nullable|string',
    ]);

    $tag->update($data);

    return redirect()->route('admin.tags.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Tag $tag): RedirectResponse
  {
    $tag->delete();

    return redirect()->route('admin.tags.index');
  }
}
