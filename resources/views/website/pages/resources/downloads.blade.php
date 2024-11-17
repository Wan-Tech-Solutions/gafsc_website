@extends('website.layouts.master')

@section('title')
    Downloads
@endsection


@section('content')
    <main class="main">
        {{--
        <div class="site-breadcrumb" style="background: url({{ asset('img/bg/bg-1.png') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Downloads</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Resources</a></li>
                    <li class="active">Downloads</li>
                </ul>
            </div>
        </div>
        --}}


        @if ($files->count() > 0)
            <div class="notice-board py-120">
                <div class="container">
                    <div class="notice-wrap">
                        <div class="research-download">
                            @foreach ($files as $file)
                                <a href="{{ route('resources.download', $file->firstMedia('download')->id) }}"><i
                                        class="far fa-download"></i>
                                    {{ $file->description }}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="pagination-area">
                        {{-- {{ $files->links() }} --}}
                    </div>

                </div>
            </div>
        @endif

    </main>
@endsection
