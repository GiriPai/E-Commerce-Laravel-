@extends('admins/admin_layouts/master')
@section('content')
@include('admins/admin_layouts/leftsidebar')
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Form Basic</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home.index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Stock</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <div class="m-r-10">
                        <div class="lastmonth"></div>
                    </div>
                    <div class=""><small>LAST MONTH</small>
                        <h4 class="text-info m-b-0 font-medium">$58,256</h4></div>
                </div>
            </div> -->
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
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- row -->
        @foreach($stocks as $stock)
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit the Stock Here</h4>
                        <h6 class="card-subtitle"> All with bootstrap element classies </h6>
                        <form class="m-t-30" method="post" action="{{ route('stock.update',$stock->id) }}">
                          @csrf
                          @method("PUT")
                            <div class="form-group">
                                <label for="exampleInputproduct">Product Name</label>
                                <input type="text" class="form-control" id="exampleInputproduct" aria-describedby="emailHelp" placeholder="Enter Product" value ="{{$stock->product->product_name}}" >
                            </div>
                            <div class="form-group">
                                <label for="example-number-input1">Initial Stock</label>
                              <input class="form-control" type="number" value="{{$stock->initial_stock}}" name="initial" id="example-number-input1">
                            </div>
                            <div class="form-group">
                                <label for="example-number-input" class="col-2 col-form-label">Available Stock</label>
                                <div class="col-10">
                                    <input class="form-control" type="number" value="{{$stock->available_stock}}" name="available" id="example-number-input">
                                </div>
                            </div>
                            <!-- <div class="custom-control custom-checkbox mr-sm-2 m-b-15">
                                <input type="checkbox" class="custom-control-input" id="checkbox0" value="check">
                                <label class="custom-control-label" for="checkbox0">Check Me Out !</label>
                            </div> -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
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
