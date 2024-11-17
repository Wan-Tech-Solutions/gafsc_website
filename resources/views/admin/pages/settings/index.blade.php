@extends('admin.layouts.master')

@section('title')
System Settings
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">System Settings
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="currency_settings-tab" data-bs-toggle="pill"
                                href="ui-tabs.html#currency_settings" role="tab" aria-controls="currency_settings"
                                aria-selected="true">Currencies
                            </a>

                            <a class="nav-link mb-2" id="v-pills-home-tab" data-bs-toggle="pill"
                                href="ui-tabs.html#v-pills-home" role="tab" aria-controls="v-pills-home"
                                aria-selected="false" tabindex="-1">Referral Bonus
                            </a>

                            <a class="nav-link mb-2" id="v-pills-contact-tab" data-bs-toggle="pill"
                                href="ui-tabs.html#v-pills-contact" role="tab" aria-controls="v-pills-contact"
                                aria-selected="false" tabindex="-1">Contact Address
                            </a>


                        </div>
                    </div><!-- end col -->
                    <div class="col-md-9">
                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                            <div class="tab-pane fade active show" id="currency_settings" role="tabpanel"
                                aria-labelledby="currency_settings-tab">
                                <p class="mb-0">
                                    <currencies></currencies>
                                </p>
                            </div>

                            <div class="tab-pane fade" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <p class="mb-0">
                                    <referral-bonus></referral-bonus>
                                </p>
                            </div>

                            <div class="tab-pane fade" id="v-pills-contact" role="tabpanel"
                            aria-labelledby="v-pills-contact-tab">
                            <p class="mb-0">
                                <contact-details></contact-details>
                            </p>
                        </div>




                        </div>
                    </div><!--  end col -->
                </div>
                <!--end row-->
            </div><!-- end card-body -->
        </div>
    </div>
</div>


@endsection
