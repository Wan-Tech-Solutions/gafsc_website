@extends('auth.admin.layout')

@section('title')
Sign-Up
@endsection

@section('contente')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






@section('content')

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <div class="form-label-group"><label class="form-label" for="name">Name</label></div>
        <div class="form-control-wrap"><input type="text" name="name"
                class="form-control form-control-lg @error('name') is-invalid @enderror" id="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your name">

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

    </div>


    <div class="form-group">
        <div class="form-label-group"><label class="form-label" for="default-01">Email
                </label></div>
        <div class="form-control-wrap"><input type="email" name="email"
                class="form-control form-control-lg @error('email') is-invalid @enderror" id="default-01"
                value="{{ old('email') }}" required autocomplete="email" autofocus
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
        </div>
        <div class="form-control-wrap"><a href="{{ route('register') }}#"
                class="form-icon form-icon-right passcode-switch lg" data-target="password"><em
                    class="passcode-icon icon-show icon ni ni-eye"></em><em
                    class="passcode-icon icon-hide icon ni ni-eye-off"></em></a>
            <input type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror"
                name="password" id="password" placeholder="Enter your Password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>




    </div>
    <div class="form-group"><button class="btn btn-lg btn-primary btn-block">Sign
            Up</button></div>
</form>
@if (Route::has('login'))
<div class="form-note-s2 text-center pt-4"> Already have an account? <a href="{{ route('login') }}">Sign in instead</a>
</div>
@endif

@endsection
