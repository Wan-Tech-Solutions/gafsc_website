@extends('auth.admin.layout')

@section('title')
Sign-In
@endsection

@section('content')

<form method="POST" action="{{ route('admin.login.submit') }}">
    @csrf
    <div class="form-group">
        <div class="form-label-group"><label class="form-label" for="default-01">Email
                or Username</label></div>
        <div class="form-control-wrap"><input type="email" name="email"
                class="form-control form-control-lg @error('email') is-invalid @enderror" id="default-01"
                value="{{ old('email') ?? request()->email }}" required autocomplete="email" autofocus
                placeholder="Enter your email address or username">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

    </div>


    <div class="form-group">
        <div class="form-label-group"><label class="form-label" for="password">Password</label>

            @if (Route::has('admin.forgot-password'))
            <a class="link link-primary link-sm"
                href="{{ route('admin.forgot-password') }}">{{ __('Forgot Your Password?') }}</a>
            @endif


        </div>
        <div class="form-control-wrap"><a href="{{ route('admin.login') }}#"
                class="form-icon form-icon-right passcode-switch lg" data-target="password"><em
                    class="passcode-icon icon-show icon ni ni-eye"></em><em
                    class="passcode-icon icon-hide icon ni ni-eye-off"></em></a>
            <input type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror"
                value="bryt1991" name="password" id="password" placeholder="Enter your Password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <hr>

    <div class="form-group"><button class="btn btn-lg btn-primary btn-block">Sign
            in</button>
    </div>
</form>


@if (Route::has('register'))
<div class="form-note-s2 text-center pt-4"> New on our platform? <a href="{{ route('register') }}">Create an account</a>
</div>
@endif

@endsection
