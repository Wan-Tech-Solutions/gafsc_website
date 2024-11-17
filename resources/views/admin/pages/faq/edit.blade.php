@extends('admin.layouts.master')

@section('title')
    {{ $faq->title }}
@endsection

@section('data-to-vue')
    <script type="text/javascript">
        window.app = {
            faq: @json($faq)
        }
    </script>
@endsection


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Edit {{ $faq->title }}
            </div>
        </div>
    </div>


    <div class="{{ config('mlm.dash_row') }}">
        <div class="col-lg-12 col-md-12">
            <edit-faq></edit-faq>
        </div>
    </div>
@endsection
