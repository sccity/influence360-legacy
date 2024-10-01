<?php

namespace Influence360\Admin\Http\Controllers\Settings;

use Influence360\Admin\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin::settings.index');
    }
}
