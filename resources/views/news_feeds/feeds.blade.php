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
                      <h4 class="page-title">Newsfeeds</h4>
                      <div class="d-flex align-items-center">
                          <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Newsfeeds</li>
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
              @foreach($feeds as $feed)
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <h4 class="card-title">{{$feed->title}}</h4>
                              <h6 class="card-subtitle">{{$feed->updated_at->diffForHumans()}}</h6>
                              <p> {{ $feed->content }}</p>
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
