<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\VerifyOtpRequest;
use App\Notifications\OTPNotification;

class OtpController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (is_null(auth()->user()->otp)) {
            return  redirect()->route('user.dashboard.index');

            return back();
        }

        return view('auth.passwords.otp');
    }

    public function submit(VerifyOtpRequest $request)
    {
        auth()->user()->update([
            'otp' => null,
        ]);

        return redirect()->route('user.dashboard.index');
    }

    public function resend()
    {
        $otp = rand(999, 9999);

        auth()->user()->update([
            'otp' => $otp,
        ]);

        auth()->user()->notify(new OTPNotification($otp));

        return back()->with('otp_response', mask_email(auth()->user()->email));
    }
}
