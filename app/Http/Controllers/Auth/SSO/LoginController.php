<?php

namespace App\Http\Controllers\Auth\SSO;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInRequest;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(SignInRequest $request)
    {
        // return session('take_user_to');

        // session(['take_user_to' => 'counselor.dashboard.index']);
        // dd(session('take_user_to'));
        return redirect()->route(session('take_user_to'));

        return redirect()->intended(route(session('take_user_to')));
    }
}
