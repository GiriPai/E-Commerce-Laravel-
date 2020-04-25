@extends('admins/admin_layouts/master')

@section('content')
@include('admins/admin_layouts/leftsidebar')

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <div class="m-r-10">
                        <div class="lastmonth"></div>
                    </div>
                    <div class=""><small>Total Profit</small>
                        <h4 class="text-info m-b-0 font-medium">{{ $orders->sum('price') }}</h4></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- ============================================================== -->
                    <!-- Info Box -->
                    <!-- ============================================================== -->
                    <div class="card-body border-top">
                        <div class="row m-b-0">
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-orange display-5"><i class="mdi mdi-wallet"></i></span></div>
                                    <div><span>Our Products</span>
                                        <h3 class="font-medium m-b-0">{{ $products->count() }}</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-cyan display-5"><i class="mdi mdi-star-circle"></i></span></div>
                                    <div><span>Purchase Expense</span>
                                        <h3 class="font-medium m-b-0">{{ $refurbish->where('status','1')->sum('price') }}</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-info display-5"><i class="mdi mdi-shopping"></i></span></div>
                                    <div><span>Sold Items</span>
                                        <h3 class="font-medium m-b-0">{{ $orders->count() }}</h3></div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-primary display-5"><i class="mdi mdi-currency-usd"></i></span></div>
                                    <div><span>Earnings</span>
                                        <h3 class="font-medium m-b-0">{{ $orders->sum('price') }}</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-4">
                <div class="card bg-info text-white  card-hover">
                    <div class="card-body">
                        <h4 class="card-title">Categories</h4>
                        <div class="d-flex align-items-center m-t-30">
                            <div class="" id="ravenue"></div>
                            <div class="ml-auto">
                                <h3 class="font-medium white-text m-b-0">{{ $category->count() }}</h3><span class="white-text op-5"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <div class="col-lg-4">
                <div class="card bg-cyan text-white  card-hover">
                    <div class="card-body">
                        <h4 class="card-title">Classification</h4>
                        <h3 class="white-text m-b-0"> {{ $classification->count() }}</h3>
                    </div>
                    <div class="m-t-20" id="views"></div>
                </div>
            </div>
            <!-- column -->
            <div class="col-lg-4">
                <div class="card  card-hover">
                    <div class="card-body">
                        <h4 class="card-title">Type</h4>
                        <div class="d-flex no-block align-items-center m-t-30">
                            <div class="">
                                <h3 class="font-medium m-b-0">{{ $type->count() }}</h3><span class="">Type</span></div>
                            <div class="ml-auto">
                                <div style="max-width:150px; height:60px;" class="m-b-40">
                                    <canvas id="bouncerate"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
All Rights Reserved by Xtreme admin. Designed and Developed by <a href="https://wrappixel.com/">WrapPixel</a>.
</footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->


@endsection
