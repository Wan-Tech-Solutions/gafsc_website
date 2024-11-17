<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;

class ImpersonationController extends Controller
{
    public function impersonate(User $user)
    {
        // dd($user);

        auth()->guard('admin')->user()->impersonate($user);

        return redirect()->route('user.dashboard.index');
    }

    public function leaveImpersonate()
    {
        auth()->user()->leaveImpersonation();

        return redirect()->route('admin.accounts.index');
    }
}
