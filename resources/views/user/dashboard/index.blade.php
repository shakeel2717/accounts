@extends('user.layout.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-header-title">Finance Management</h4>
                </div>

                <!-- Body -->
                <div class="card-body">
                    <div class="mb-4">
                        <p>Add Transaction in to System.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Card -->
                            <a class="card card-dashed card-centered" href="javascript:;" data-bs-toggle="modal"
                                data-bs-target="#accountAddCardModal">
                                <div class="card-body card-dashed-body py-8">
                                    <img class="avatar avatar-lg avatar-4x3 mb-2"
                                        src="/assets/svg/illustrations/oc-add-card.svg" alt="Image Description"
                                        data-hs-theme-appearance="default">
                                    <img class="avatar avatar-lg avatar-4x3 mb-2"
                                        src="/assets/svg/illustrations-light/oc-add-card.svg" alt="Image Description"
                                        data-hs-theme-appearance="dark">
                                    <span><i class="bi-dash"></i> You Gave</span>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Card -->
                            <a class="card card-dashed card-centered" href="javascript:;" data-bs-toggle="modal"
                                data-bs-target="#accountAddCardModal">
                                <div class="card-body card-dashed-body py-8">
                                    <img class="avatar avatar-lg avatar-4x3 mb-2"
                                        src="/assets/svg/illustrations/oc-add-card.svg" alt="Image Description"
                                        data-hs-theme-appearance="default">
                                    <img class="avatar avatar-lg avatar-4x3 mb-2"
                                        src="/assets/svg/illustrations-light/oc-add-card.svg" alt="Image Description"
                                        data-hs-theme-appearance="dark">
                                    <span><i class="bi-plus"></i> You Got</span>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Body -->
            </div>
        </div>
    </div>
@endsection
