<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class IndexController extends Controller
{
  public function __invoke(): View
  {
    return view('admin.index');
  }

  public function slug(Request $request): JsonResponse
  {
    $slug = Str::slug($request->title);

    return response()->json(['slug' => $slug]);
  }

}
