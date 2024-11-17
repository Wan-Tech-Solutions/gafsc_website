@extends('admin.layouts.master')

@section('title')
    New Notice
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">New Notice
            </div>
        </div>
    </div>


    <div class="{{ config('mlm.dash_row') }}">
        <div class="col-lg-12 col-md-12">
            <create-noticeboard></create-noticeboard>
        </div>
    </div>
@endsection
