@extends('admin.layouts.master')

@section('title')
    Account Settings
@endsection


@section('breadcrumb')
    <div class="breadcrumb">
        <h1>Account Settings</h1>
    </div>
@endsection



@section('content')


    <div class="container-fluid">


        <div class="profile-foreground position-relative mx-n4 mt-n4">
            <div class="profile-wid-bg">
                <img src="{{ asset('img/IMG_7757.JPG') }}" alt="" class="profile-wid-img">
            </div>
        </div>
        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
            <div class="row g-4">
                <div class="col-auto">
                    <div class="avatar-lg">
                        <img src="{{ auth()->user()->avatar }}" alt="user-img" class="img-thumbnail rounded-circle">
                    </div>
                </div>
                <!--end col-->
                <div class="col">
                    <div class="p-2">
                        <h3 class="text-white mb-1">{{ auth()->user()->full_name }}</h3>
                        <div class="hstack text-white-50 gap-1">
                            <div class="me-2"><i class="ri-envelope me-1 text-white-75 fs-16 align-middle"></i>
                                {{ auth()->user()->email }} <br>
                                Joining Date :
                                {{ auth()->user()->created_at->format('d M, Y') }}
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!--end row-->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="d-flex">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link fs-14 active" href="{{ route('admin.profile.index') }}" role="tab"
                                    aria-selected="true">
                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Personal Details</span>
                                </a>
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                                <a class="nav-link fs-14" href="{{ route('admin.profile.photo') }}" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <i class="ri-list-unordered d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Photo</span>
                                </a>
                            </li> --}}

                            <li class="nav-item" role="presentation">
                                <a class="nav-link fs-14" href="{{ route('admin.profile.security') }}" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Change Password</span>
                                </a>
                            </li>

                        </ul>


                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content pt-4 text-muted">
                        <div class="tab-pane active" id="personal_details" role="tabpanel">
                            <div class="row">
                                <!--end col-->
                                <div class="col-xxl-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <person></person>
                                        </div>
                                        <!--end card-body-->
                                    </div><!-- end card -->

                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>

                        <div class="tab-pane" id="photo" role="tabpanel">
                            <div class="row">
                                {{-- <div class="col-xxl-3">

                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Basic Info</h5>
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Full Name :</th>
                                                            <td class="text-muted">{{ auth()->user()->full_name }}</td>
            </tr>
            <tr>
                <th class="ps-0" scope="row">Mobile :</th>
                <td class="text-muted">{{ auth()->user()->phone }}</td>
            </tr>
            <tr>
                <th class="ps-0" scope="row">E-mail :</th>
                <td class="text-muted">{{ auth()->user()->email }}</td>
            </tr>

            <tr>
                <th class="ps-0" scope="row">Joining Date</th>
                <td class="text-muted">
                    {{ auth()->user()->created_at->format('d M, Y') }}</td>
            </tr>
            </tbody>
            </table>
        </div>
    </div><!-- end card body -->
</div><!-- end card -->

</div> --}}


                                <!--end col-->
                                <div class="col-xxl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <photo></photo>
                                        </div>
                                        <!--end card-body-->
                                    </div><!-- end card -->

                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end tab-pane-->

                        <!--end tab-pane-->
                        <div class="tab-pane fade" id="change_password" role="tabpanel">
                            <div class="row">
                                {{-- <div class="col-xxl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Basic Info</h5>
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Full Name :</th>
                                                            <td class="text-muted">{{ auth()->user()->full_name }}</td>
        </tr>
        <tr>
            <th class="ps-0" scope="row">Mobile :</th>
            <td class="text-muted">{{ auth()->user()->phone }}</td>
        </tr>
        <tr>
            <th class="ps-0" scope="row">E-mail :</th>
            <td class="text-muted">{{ auth()->user()->email }}</td>
        </tr>

        <tr>
            <th class="ps-0" scope="row">Joining Date</th>
            <td class="text-muted">
                {{ auth()->user()->created_at->format('d M, Y') }}</td>
        </tr>
        </tbody>
        </table>
    </div>
</div><!-- end card body -->
</div><!-- end card -->

</div> --}}


                                <!--end col-->
                                <div class="col-xxl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-4">
                                                <h5 class="card-title flex-grow-1 mb-0">Change Password</h5>
                                            </div>
                                            <security></security>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end tab-pane-->

                        <div class="tab-pane fade" id="twofa" role="tabpanel">
                            <div class="row">
                                {{-- <div class="col-xxl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Basic Info</h5>
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Full Name :</th>
                                                            <td class="text-muted">{{ auth()->user()->full_name }}</td>
        </tr>
        <tr>
            <th class="ps-0" scope="row">Mobile :</th>
            <td class="text-muted">{{ auth()->user()->phone }}</td>
        </tr>
        <tr>
            <th class="ps-0" scope="row">E-mail :</th>
            <td class="text-muted">{{ auth()->user()->email }}</td>
        </tr>

        <tr>
            <th class="ps-0" scope="row">Joining Date</th>
            <td class="text-muted">
                {{ auth()->user()->created_at->format('d M, Y') }}</td>
        </tr>
        </tbody>
        </table>
    </div>
</div><!-- end card body -->
</div><!-- end card -->

</div> --}}
                                <!--end col-->

                                <div class="col-xxl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-4">
                                                <h5 class="card-title flex-grow-1 mb-0">Two Factor Authentication
                                                    {{ auth()->user()->two_factor_secret ? ' Enabled' : ' Disabled' }}</h5>
                                            </div>
                                            <form action="/user/two-factor-authentication" method="post">
                                                @csrf

                                                @if (auth()->user()->two_factor_secret)
                                                    <div class="alert alert-success alert-solid" role="alert">
                                                        <strong>Two Factor Authentication Enabled </strong>
                                                    </div>

                                                    <div class="mb-3">
                                                        {!! auth()->user()->twoFactorQrCodeSvg() !!}
                                                    </div>



                                                    <div class="mb-3">
                                                        <ul class="list-group">
                                                            @foreach (auth()->user()->recoveryCodes() as $code)
                                                                <li class="list-group-item user-select-all">
                                                                    {{ $code }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>



                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger mb-3">Disable Two
                                                        Factor
                                                        Authentication</button>
                                                @else
                                                    <button type="submit" class="btn btn-outline-primary mb-3">Enable Two
                                                        Factor
                                                        Authentication</button>
                                                @endif

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!--end tab-content-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div><!-- container-fluid -->

@endsection
