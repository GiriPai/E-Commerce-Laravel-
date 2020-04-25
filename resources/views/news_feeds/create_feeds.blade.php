@extends('admins/admin_layouts/master')
@section('content')
@include('admins/admin_layouts/leftsidebar')



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
        <!-- row -->
        <div class="row">
              <div class="col-sm-12">
                  <div class="card card-body">
                      <h4 class="card-title">Newsfeeds</h4>
                      <h5 class="card-subtitle"> Create newsfeeds here </h5>
                      <form class="form-horizontal m-t-30" method="post" action = "{{ route('Newsfeeds.store') }}">
                        @csrf
                          <div class="form-group">
                              <label>Title</label>
                              <input type="text"  name="title" class="form-control" value="">
                          </div>

                          <div class="form-group">
                              <label>Content</label>
                              <textarea class="form-control" name="content" rows="5"></textarea>
                          </div>

                          <div class="form-actions">
                               <div class="card-body">
                                 <!-- <input type="submit" name="submit" class="btn btn-success" value="Save"> <i class="fa fa-check"></i> -->
                                   <button type="submit" name="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                   <a href="{{route('Newsfeeds.index')}}"<button type="button" class="btn btn-dark">Cancel</button></a>
                               </div>
                           </div>

                      </form>
                  </div>
              </div>
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
