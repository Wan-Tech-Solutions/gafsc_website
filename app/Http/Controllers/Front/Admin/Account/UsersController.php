<?php

namespace App\Http\Controllers\Front\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\Admin;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.pages.accounts.index');
    }

    public function create()
    {
        return view('admin.pages.accounts.create');
    }

    public function edit(Admin $user)
    {
        return view('admin.pages.accounts.create', compact('user'));
    }
}
