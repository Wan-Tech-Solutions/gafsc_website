<?php

namespace App\Http\Controllers\Front\Admin\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.pages.profile.index');
    }

    public function photo(Request $request)
    {
        return view('admin.pages.profile.photo');
    }

    public function security(Request $request)
    {
        return view('admin.pages.profile.security');
    }
}
