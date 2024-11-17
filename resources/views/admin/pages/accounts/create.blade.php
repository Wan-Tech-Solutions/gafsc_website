@extends('admin.layouts.master')

@section('title')
    Manage Acount
@endsection



@section('data-to-vue')
    <script type="text/javascript">
        window.app = {
            user: @json($user ?? null),
        }
    </script>
@endsection



@section('content')
    <div class="{{ config('mlm.dash_row') }}">
        <div class="col-lg-12 col-md-12">
            <new-user></new-user>
        </div>
    </div>
@endsection
