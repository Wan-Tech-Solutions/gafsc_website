@extends('admin.layouts.master')

@section('title')
    New FAQ
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">New FAQ
            </div>
        </div>
    </div>


    <div class="{{ config('mlm.dash_row') }}">
        <div class="col-lg-12 col-md-12">
            <create-faq></create-faq>
        </div>
    </div>
@endsection
