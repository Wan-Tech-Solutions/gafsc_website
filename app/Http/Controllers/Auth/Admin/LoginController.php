<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('auth.login');

        return view('auth.admin.login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // if successful, then redirect to their intended location

            $user = Admin::whereEmail($request->email)->firstOrFail();

            // $log = new LoginLog();
            // $log->ip = $request->getClientIp();
            // $log->agent = $request->server('HTTP_USER_AGENT');
            // $user = $user->logins()->save($log);

            return redirect()->intended(route('admin.dashboard.index'));
        }

        // if unsuccessful, then redirect back to the login with the form data
        $error = \Illuminate\Validation\ValidationException::withMessages([
            'email' => ['These credentials do not match our records.'],
        ]);
        throw $error;
    }
}
