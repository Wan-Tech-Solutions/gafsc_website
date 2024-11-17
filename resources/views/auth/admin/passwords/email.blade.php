@extends('auth.layout')

@section('title')
Reset Password
@endsection


@section('help_text')
If you forgot your password, we’ll email you instructions to reset your password.
@endsection

@section('content')

<form method="POST" action="{{ route('admin.forgot-password.submit') }}">
    @csrf

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="form-group">
        <div class="form-label-group">
            <label class="form-label" for="default-01">Email</label>
            <a class="link link-primary link-sm" href="{{ route('login') }}#">Back to login</a>
        </div>
        <div class="form-control-wrap">
            <input id="email" type="email" class="form-control  form-control-lg @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                placeholder="Enter your email address">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>


    <div class="form-group"><button
            class="btn btn-lg btn-primary btn-block">{{ __('Send Password Reset Link') }}</button></div>
</form>
@endsection
