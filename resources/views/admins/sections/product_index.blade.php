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
                <h4 class="page-title">Products</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-7 align-self-right">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <div class="col-lg-5 col-md-8 ">
                       <a href="{{route('products.create')}}"> <button type="button" class="btn waves-effect waves-light btn-block btn-info">Add New</button></a>
                    </div>
                    <!-- <div class="m-r-10">
                        <div class="lastmonth"></div>
                    </div>
                    <div class=""><small>LAST MONTH</small>
                        <h4 class="text-info m-b-0 font-medium">$58,256</h4></div> -->
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
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- File export -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Products</h4>

                        <form>

                            @csrf
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-4">

                                    <div class="form-group m-b-30">
                                        <!-- <label class="mr-sm-2" for="inlineFormCustomSelect">Select</label>
                                        <select class="custom-select mr-sm-2" id="section">
                                            <option selected="">Choose...</option>
                                            <option value="1">Classification </option>
                                            <option value="2">Category</option>
                                            <option value="3">All Products</option>
                                        </select> -->
                                    </div>


                            </div>
                             <div class="col-sm-12 col-md-6 col-lg-4">

                                    <!-- <div class="form-group m-b-30">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Select</label>
                                        <select class="custom-select mr-sm-2" id="sub">
                                            <option selected="">Choose...</option>

                                        </select>
                                    </div> -->

                            </div>
                             <div class="col-sm-12 col-md-6 col-lg-4">

                                    <div class="form-group m-b-30">
                                        <!-- <button class="btn waves-effect waves-light btn-primary" type="button">Primary</button> -->

                                    </div>

                            </div>
                            <!-- <div class="col-lg-2 col-xlg-6">

                                      <div class="form-group m-b-30">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Select</label>
                                       <button class="btn waves-effect waves-light btn-primary" type="button">Primary</button>
                                    </div>

                                <div class="button-group">


                                </div> -->



                        </div>
                    </form>
                        <!-- </div> -->
                        <div class="table-responsive">
                            <table id="file_export" class="table table-striped table-bordered display">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Classification</th>
                                        <th>Category</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Dicounted Price</th>
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->classification->class_name}}</td>
                                        <td>{{$product->category->category_name}}</td>
                                        <td>{{$product->type->type_name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->discount}}</td>
                                        <td>{{$product->discounted_price}} </td>
                                        <td>
                                              <form  id='editID' action="{{ route('products.edit',$product->id) }}" method="GET" >
                                                {{ csrf_field() }}
                                                <button class="btn btn-primary btn-sm"title="Edit" data-toggle="tooltip" type="submit">  <i class="ti-marker-alt"></i></button>
                                              </form>
                                        </td>
                                    </tr>
                                    @endforeach



                                </tbody>
                               <!--  <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                    </div>
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
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- <script type="text/javascript">
    $(document).ready(function() {
        $('#section').on('change', function() {
            var ID = $(this).val();


            if(ID == "1")
            {
                $.ajax({
                    url: 'http://localhost:8000/admin/sections/classifications/ajax',
                    type: "GET",
                    dataType: "json",
                    success:function(data) {


                        $('#sub').empty();
                         $("#sub").attr("disabled", false);
                         $("#sub").append('<option>Select</option>');
                         $.each(data,function(key,value){
                         $("#sub").append('<option value="'+value['id']+'">'+value['class_name']+'</option>');
                         });
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("Status: " + textStatus); alert("Error: " + errorThrown);
                }
                });
            }


            else if(ID =='2'){

            $.ajax({
                    url: 'http://localhost:8000/admin/sections/categories/ajax/',
                    type: "GET",
                    dataType: "json",
                    success:function(data) {


                        $('select[id="sub"]').empty();
                         $("#sub").attr("disabled", false);
                         $("#sub").append('<option>Select</option>');
                         $.each(data,function(key,value){
                         $("#sub").append('<option value="'+value['id']+'">'+value['category_name']+'</option>');
                         });


                    }
                });
            }

            else if(ID=='3')
            {
                $("#sub").empty();
                $("#sub").attr("disabled", true);
            }

            else{
                $('select[id="sub"]').empty();
            }
         });
    });
</script> -->
 @endsection
