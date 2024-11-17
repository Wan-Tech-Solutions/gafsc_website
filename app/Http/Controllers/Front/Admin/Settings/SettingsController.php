<?php

namespace App\Http\Controllers\Front\Admin\Settings;

use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index()
    {
        // return system_all();
        // return system_get('system_name');

        return view('admin.pages.settings.index');
    }
}
