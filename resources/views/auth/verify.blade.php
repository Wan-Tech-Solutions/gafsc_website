@extends('auth.layout')

@section('title')
    Email Verification
@endsection

@section('content')
    <h3>Verify Your Email Address</h3>

    @if (session('resent'))
        <div class="alert alert-success d-flex align-items-center my-3" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        </div>
    @endif


    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <div class="form-group mt-4"><button type="submit"
                            class="btn btn-primary w-100">{{ __('click here to request another') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
