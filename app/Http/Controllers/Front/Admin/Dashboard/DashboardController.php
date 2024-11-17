<?php

namespace App\Http\Controllers\Front\Admin\Dashboard;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return redirect()->route('admin.noticeboard.index');

        return view('admin.pages.dashboard.index');
    }
}
