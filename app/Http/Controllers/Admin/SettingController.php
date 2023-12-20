<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function index(): View
  {
    $settings = Setting::all();
    return view('admin.settings.index', compact('settings'));
  }

  public function store(Request $request)
  {
    $rules = Setting::getValidationRules();
    $data  = $this->validate($request, $rules);

    $validSettings = array_keys($rules);

    foreach ($data as $key => $val) {
      if (in_array($key, $validSettings)) {
        Setting::add($key, $val, Setting::getDataType($key));
      }
    }

    return redirect()->back()->with('status', 'Settings has been saved.');
  }
}
