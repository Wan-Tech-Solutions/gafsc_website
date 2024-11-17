@extends('auth.layout')

@section('title')
    Confirm Password
@endsection

@section('content')
    <h3>Confirm Password</h3>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="mb-3 form-group">
            <div class="position-relative auth-pass-inputgroup mb-3">
                <input type="password" name="password"
                    class="form-control pe-5 password-input  @error('password') is-invalid @enderror"
                    placeholder="Enter password" id="password-input">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


        </div>


        <div class="form-group">
            <button class="btn btn-primary w-100">
                {{ __('Confirm Password') }}
            </button>
        </div>


        <div class="text-center">
            @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </form>
@endsection
