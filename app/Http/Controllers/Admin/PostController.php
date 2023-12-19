<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
      $posts = Post::query()->get();

      return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
      return view('admin.posts.create');
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

      Post::query()->firstOrCreate($data);

      return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): View
    {
      return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): View
    {
      return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
      $data = $request->validate([
        'title'            => 'required|string',
        'slug'             => "required|unique:categories,slug,$id",
        'description'      => 'nullable|string',
        'status'           => 'required|integer',
        'image'            => 'nullable|image|mimes:png,jpg',
        'order'            => 'nullable|integer',
        'meta_title'       => 'nullable|string',
        'meta_description' => 'nullable|string',
        'meta_keyword'     => 'nullable|string',
      ]);

      $post->update($data);

      return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
      $post->delete();

      return redirect()->route('admin.posts.index');
    }
}
