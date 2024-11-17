@extends('auth.layout')

@section('title')
    Login
@endsection

@section('help_text')
@endsection


@section('content')
    <form method="POST" action="{{ route('sign-in') }}">
        @csrf

        <div class="form-group mb-3">
            <div class="form-label-group">
                <label class="form-label" for="email">Email</label>
            </div>

            <div class="form-control-wrap"><input type="email" name="email"
                    class="form-control form-control-rounded @error('email') is-invalid @enderror" id="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus
                    placeholder="Enter your email address or username">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
        </div>



        <div class="mb-3">

            <label class="form-label" for="password-input">Password</label>
            <div class="position-relative auth-pass-inputgroup mb-3">
                <input type="password" class="form-control pe-5 password-input" name="password" placeholder="Enter password"
                    id="password-input">
                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                    type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
            </div>
        </div>



        <div class="form-group"><button class="btn btn-primary w-100">Sign
                in</button>
        </div>


    </form>
    <hr>

    <div class="forgot-password text-center">
        <a href="{{ route('password.request') }}">Forgot Password?</a>
    </div>
@endsection
