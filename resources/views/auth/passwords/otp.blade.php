@extends('auth.layout')

@section('title')
    Confirm Password
@endsection

@section('content')
    <h3>2FA</h3>
    <p>Unlock your account by entering 2FA code</p>


    <form method="POST" action="/two-factor-challenge">
        {{-- <form method="POST" action="{{ route('otp-verify') }}"> --}}


        @csrf

        {{--
        <div class="alert alert-success d-flex align-items-center my-3" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                {{ 'A fresh OTP has been sent to ' . mask_email(auth()->user()->email) }}
            </div>
        </div> --}}

        <div class="mb-3 form-group">
            <div class="position-relative auth-pass-inputgroup mb-3">
                <input type="text" maxlength="10" name="code"
                    class="form-control pe-5 password-input  @error('code') is-invalid @enderror" placeholder="Enter Code"
                    id="password-input">
                @error('code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>




        </div>


        <div class="form-group">
            <button class="btn btn-primary w-100">
                {{ __('Submit') }}
            </button>
        </div>

        {{-- <div class="forgot-password">
            Didn't get the code? <a href="{{ route('otp-resend') }}">Resend Code.</a>
        </div> --}}

    </form>
@endsection
