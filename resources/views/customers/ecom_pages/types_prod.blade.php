@extends('customers.customers_layouts.master')
@section('content')
@include('customers.customers_layouts.top_nav')
@php
    use App\Http\Controllers\CustomerControllers\CustomerResource;
@endphp
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
                <h4 class="page-title">Eco Products</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('customer_dashboard.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
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
        <div class="row el-element-overlay">

          @foreach($type_prod_list as $product)
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="{{Storage::url($product->product_image)}}" alt="user" />
                            <div class="el-overlay">
                              <ul class="list-style-none el-info">
                                  <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ route('details_view', $product->id) }}"><i class="ti-info-alt"></i></a></li>
                                  <li class="el-item">
                                    <form id="cart{{$product->id}}" action="{{route('cart.store')}}" method="POST" style="display: none;">

                                        <input type = "hidden" name="user_id" value = "{{ Auth::user()->id }}"/>
                                        <input type = "hidden" name = "product_id" value = "{{ $product->id }}" />
                                        <input type = "hidden" name = "price" value = "{{ $product->discounted_price }}" />
                                          @csrf
                                    </form>

                                    <a class="btn default btn-outline el-link" href="{{route('cart.store',$product->id)}}"
                                                      onclick="event.preventDefault();
                                                                    document.getElementById('cart{{$product->id}}').submit();">
                                      <i class="ti-shopping-cart"></i>
                                    </a>

                                  </li>
                              </ul>
                            </div>
                        </div>
                        <div class="d-flex no-block align-items-center">
                          <div class="m-l-15">
                              <h4 class="m-b-0">{{ $product->product_name }}</h4>
                              @php
                                  $categories =  CustomerResource::get_category_for_product($product->category_id);
                              @endphp
                              @foreach($categories as $c)
                                <span class="text-muted"><strong> Category : </strong> {{ $c->category_name }}</span> <br>
                              @endforeach

                              @php
                                  $types =  CustomerResource::get_type_for_product($product->type_id);
                              @endphp
                              @foreach($types as $t)
                                <span class="text-muted"><strong> Type : </strong> {{ $t->type_name }}</span>
                              @endforeach
                          </div>
                            <div class="ml-auto m-r-15">
                                <button type="button" class="btn btn-dark btn-circle">${{ $product->discounted_price }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
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
