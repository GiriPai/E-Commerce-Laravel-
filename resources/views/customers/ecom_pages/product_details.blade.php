@extends('customers.customers_layouts.master')
@section('content')
@include('customers.customers_layouts.top_nav')
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
                <h4 class="page-title">Product Details</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('customer_dashboard.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Prodect Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-7 align-self-center">
                <!-- <div class="d-flex no-block justify-content-end align-items-center">
                    <div class="m-r-10">
                        <div class="lastmonth"></div>
                    </div>
                    <div class=""><small>LAST MONTH</small>
                        <h4 class="text-info m-b-0 font-medium">$58,256</h4></div>
                </div> -->
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
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        @foreach($details as $detail)
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $detail->product_name }}</h3>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="white-box text-center"> <img src="{{Storage::url($detail->product_image)}}" height="250" width="250"> </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-6">
                                <h4 class="box-title m-t-40">Product description</h4>
                                <p>{{$detail->p_description}}</p>
                                <h2 class="m-t-40">{{ $detail->discounted_price }} <small class="text-success">({{$detail->discount}}% off)</small> </h2>
                                <!-- <button class="btn btn-dark btn-rounded m-r-5" data-toggle="tooltip" title="" data-original-title="Add to cart"><i class="ti-shopping-cart"></i> </button> -->


                                <form id="cart{{$detail->id}}" action="{{route('cart.store')}}" method="POST">

                                    <input type = "hidden" name="user_id" value = "{{ Auth::user()->id }}"/>
                                    <input type = "hidden" name = "product_id" value = "{{ $detail->id }}" />
                                    <input type = "hidden" name = "price" value = "{{ $detail->discounted_price }}" />
                                      @csrf
                                  <button type="submit" class="btn btn-dark btn-rounded m-r-5" data-toggle="tooltip" title="" data-original-title="Add to cart"><i class="ti-shopping-cart"></i> </button><strike>{{ $detail->price }}</strike>
                                </form>

                                <!-- <a class="btn default btn-outline el-link" href="{{route('cart.store',$detail->id)}}"
                                                  onclick="event.preventDefault();
                                                                document.getElementById('cart{{$detail->id}}').submit();">
                                  <i class="ti-shopping-cart"></i>
                                </a> -->


                                <h3 class="box-title m-t-40">Key Highlights</h3>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-check text-success"></i> <strong> Category : </strong>{{ $detail->category->category_name }}</li>
                                    <li><i class="fa fa-check text-success"></i> <strong> Classification : </strong>{{ $detail->classification->class_name }}</li>
                                    <li><i class="fa fa-check text-success"></i> <strong> Type : </strong>{{ $detail->type->type_name }}</li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h3 class="box-title m-t-40">Category</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td width="390">Category Name</td>
                                                <td> {{ $detail->category->category_name }} </td>
                                            </tr>
                                            <tr>
                                                <td>Category Description</td>
                                                <td> {{ $detail->category->c_description }} </td>
                                            </tr>
                                            <tr>
                                                <td>Is Category Active</td>
                                                @php
                                                  if($detail->category->is_active === 1){
                                                    $a = "YES";
                                                  }else{
                                                    $a = "NO";
                                                  }

                                                @endphp
                                                <td> {{$a}} </td>
                                            </tr>
                                            <tr>
                                                <td>Release Date</td>
                                                <td> {{$detail->category->updated_at->diffForHumans()}} </td>
                                            </tr>
                                            <tr>
                                                <td>Image</td>
                                                <td> Contemporary &amp; Modern </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h3 class="box-title m-t-40">Type</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td width="390">Type Name</td>
                                                <td> {{$detail->type->type_name}} </td>
                                            </tr>
                                            <tr>
                                                <td>Type Description</td>
                                                <td> {{$detail->type->t_description}} </td>
                                            </tr>
                                            <tr>
                                                <td>Release Date</td>
                                                <td> {{$detail->type->updated_at->diffForHumans()}} </td>
                                            </tr>
                                            <tr>
                                                <td>Image</td>
                                                <td> Office Chair </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h3 class="box-title m-t-40">Classification</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td width="390">Classifiction Name</td>
                                                <td> {{$detail->classification->class_name}} </td>
                                            </tr>
                                            <tr>
                                                <td>Is Classification Active</td>
                                                @php
                                                  if($detail->classification->class_is_active === 1){
                                                    $b = "YES";
                                                  }else{
                                                    $b = "NO";
                                                  }

                                                @endphp
                                                <td> {{$b}} </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
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
