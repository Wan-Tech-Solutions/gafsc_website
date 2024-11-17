@extends('auth.layout')

@section('title')
    Sign-Up
@endsection


@section('data-to-vue')
    <script type="text/javascript">
        window.carlcorp = {
            ref: @json(request()->ref ?? null),
        }
    </script>
@endsection


@section('content')
    <register></register>

    @if (Route::has('login'))
        <div class="form-note-s2 text-center"> Already have an account? <a class="text-primary"
                href="{{ route('login') }}">Sign in instead</a>
        </div>
    @endif
@endsection
