@extends('admin.dashboard')

@section('content')
<div class="container-fluid">
    <div class="dashboard-content">
        <!-- <div class="row">
            <div class="col-xl-12 col-lg-10 col-md-9 col-sm-12 col-12">
                <div class="dashboard-page-header">

                    <h3 class="dashboard-page-title">Hi, user name.</h3>
                    <p class="d-block">Here’s what’s happening today.</p>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card card-summary">
                    <div class="card-body">
                        <div class="float-left">
                            <div class="summary-count">9</div>
                            <p>Total Products</p>
                        </div>
                        <!-- <div class="summary-icon"><i class="icon-051-wedding-arch"></i></div> -->

                    </div>
                    <div class="card-footer text-center"><a href="#">View All</a></div>

                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card card-summary">
                    <div class="card-body">
                        <div class="float-left">
                            <div class="summary-count">50</div>
                            <p>Total Product Variants</p>
                        </div>
                        <!-- <div class="summary-icon"><i class="icon-021-love-1"></i></div> -->
                    </div>
                    <div class="card-footer text-center"><a href="#">View All</a></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card card-summary">
                    <div class="card-body">
                        <div class="float-left">
                            <div class="summary-count">1000</div>
                            <p>Total Variant Values</p>
                        </div>
                        <!-- <div class="summary-icon"><i class="icon-004-chat"></i></div> -->
                    </div>
                    <div class="card-footer text-center"><a href="#">View All</a></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card card-summary">
                    <div class="card-body">
                        <div class="float-left">
                            <div class="summary-count">100</div>
                            <p>Total Categories</p>
                        </div>
                        <!-- <div class="summary-icon"><i class="icon-004-chat"></i></div> -->
                    </div>
                    <div class="card-footer text-center"><a href="#">View All</a></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card card-summary">
                    <div class="card-body">
                        <div class="float-left">
                            <div class="summary-count">580</div>
                            <p>Total Sub Categories</p>
                        </div>
                        <!-- <div class="summary-icon"><i class="icon-004-chat"></i></div> -->
                    </div>
                    <div class="card-footer text-center"><a href="#">View All</a></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card card-summary">
                    <div class="card-body">
                        <div class="float-left">
                            <div class="summary-count">120</div>
                            <p>Total Brands</p>
                        </div>
                        <!-- <div class="summary-icon"><i class="icon-004-chat"></i></div> -->
                    </div>
                    <div class="card-footer text-center"><a href="#">View All</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection