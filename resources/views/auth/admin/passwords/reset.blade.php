@extends('auth.layout')

@section('title')
Reset Password
@endsection


@section('help_text')
If you forgot your password, we’ll email you instructions to reset your password.
@endsection

@section('content')
<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="form-group">
        <div class="form-label-group">
            <label class="form-label" for="default-01">Email</label>
        </div>
        <div class="form-control-wrap">
            <input id="email" type="email" class="form-control  form-control-lg @error('email') is-invalid @enderror"
                name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                placeholder="Enter your email address">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


    </div>

    <div class="form-group">
        <div class="form-label-group">
            <label class="form-label" for="password">Password</label>
        </div>
        <div class="form-control-wrap">
            <input id="password" type="password"
                class="form-control  form-control-lg @error('password') is-invalid @enderror" name="password" value=""
                required autocomplete="password" autofocus placeholder="Enter new password ">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


    </div>

    <div class="form-group">
        <div class="form-label-group">
            <label class="form-label" for="password_confirmation">Confirm Password</label>
        </div>
        <div class="form-control-wrap">
            <input id="password_confirmation" type="password"
                class="form-control  form-control-lg @error('password_confirmation') is-invalid @enderror"
                name="password_confirmation" value="{{ old('password_confirmation') }}" required
                autocomplete="password_confirmation" autofocus placeholder="Confirm Password">

        </div>
    </div>

    <div class="form-group"><button class="btn btn-lg btn-primary btn-block">{{ __('Reset Password') }}</button></div>
</form>





@endsection
