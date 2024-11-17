@extends('website.layouts.master')

@section('title')
    Organisation
@endsection


@section('content')
    <main class="main">

        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Organogram</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Organisation</a></li>
                    <li class="active">Organogram</li>
                </ul>
            </div>
        </div>
    </main>
@endsection
