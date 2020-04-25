@extends('admins/admin_layouts/master')
@section('content')
@include('admins/admin_layouts/leftsidebar')
<link href="../../assets/libs/footable/css/footable.core.min.css" rel="stylesheet">
   <!-- Custom CSS -->
   <link href="../../dist/css/style.min.css" rel="stylesheet">
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
                <h4 class="page-title">Customers</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Customers</li>
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
        <div class="table-responsive">
            <table id="file_export" class="table table-striped table-bordered display">
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Date of Registration</th>
                        <!-- <th>Year</th>
                        <th>Actions </th> -->
                    </tr>
                </thead>
                <tbody>
                   @foreach($users as $r)
                        <tr>
                          <!-- <td><img src="{{ Storage::url($r->image)}}" alt="iMac" width="80"></td> -->
                          <td><a href ="">{{ $r->id }}</a></td>

                            <td>  <a href="{{ route('customers.show',$r->id) }}">{{ $r->name }}</a></th>
                            <td>{{ $r->email }}</td>
                            <td>{{ $r->address }}</td>

                            <td>{{ $r->phone }}</td>
                            <td>{{ $r->created_at->diffForHumans() }}</td>

                            </td>
                            <!-- <td>
                              @if($r->status == 0)
                              <form  id='editID' action="" method="GET" >

                                {{ csrf_field() }}
                                <button class="btn btn-primary btn-sm"title="Edit" data-toggle="tooltip" type="submit">  <i class="ti-marker-alt"></i></button>
                              </form> -->

                              <!-- <br> -->

                                <!-- <form  id='deleteID' action="" method="POST" >
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button class="btn btn-danger btn-sm"title="Delete" data-toggle="tooltip" type="submit"><i class="ti-trash"></i></button>
                              </form>

                              @elseif($r->status == 1)
                                  <button class="btn btn-danger btn-sm"title="Sold" data-toggle="tooltip" >Sold</button>
                              @else
                                  <button class="btn btn-danger btn-sm"title="Not Intrested" data-toggle="tooltip" >Not Intrested<i class="ti-trash"></i></button>
                              @endif
                            </td> -->
                        </tr>

                      @endforeach

                </tbody>

            </table>
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
<script src="/assets/libs/footable/dist/footable.all.min.js"></script>
<script src="/dist/js/pages/tables/footable-init.js"></script>
@endsection
