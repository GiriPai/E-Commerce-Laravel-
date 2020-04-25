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
                <h4 class="page-title">Product Edit</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">New Product</li>
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
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                            <div class="form-body">
                                <h5 class="card-title">About Product</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Product Name</label>
                                            <input type="text" id="firstName" class="form-control" placeholder="  " name="name"> </div>
                                    </div>
                                    <!--/span-->
                                 <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Classification</label>
                                            <select class="form-control" data-placeholder="Choose a Classification" tabindex="1" name="classification">
                                                <option value="">Select</option>
                                                @foreach($classification_list as $class_list)
                                                <option value="{{$class_list->id}}">{{$class_list->class_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Category</label>
                                            <select class="form-control" data-placeholder="Choose a Category" tabindex="1" id="category" name="category">
                                                <option value="">Select</option>
                                                @foreach($category_list as $c_list)
                                                <option value="{{$c_list->id}}">{{$c_list->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Type</label>
                                            <select class="form-control" data-placeholder="Choose a Type" tabindex="1" id="type" name="type">
                                                <option value="">Select</option>

                                            </select>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1" name="price">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon2"><i class="ti-cut"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Discount" aria-label="Discount" aria-describedby="basic-addon2" name="discount">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                 <!--/row-->
                                <div class="row">
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <br/>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value='1'>
                                                <label class="custom-control-label" for="customRadioInline1">Active</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" value='0'>
                                                <label class="custom-control-label" for="customRadioInline2">Inactive</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <h5 class="card-title m-t-40">Product Description</h5>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="4" name="product_description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                                <div class="row">


                                    <!--/span-->
                                    <div class="col-md-3">
                                        <h5 class="card-title m-t-20">Upload Image</h5>

                                        <div class="btn btn-info waves-effect waves-light"><span>Upload Anonther Image</span>
                                            <input type="file" class="upload" name="image"></div>
                                    </div>
                                </div>

                                <hr> </div>
                            <div class="form-actions m-t-40">
                                @csrf
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-dark">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#category').on('change', function() {
            var categoryID = $(this).val();
            console.log(categoryID);
            if(categoryID) {
                $.ajax({
                    url: 'http://localhost:8000/admin/sections/types/ajax/'+categoryID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        // alert(data);
                        $('select[id="type"]').empty();

                         $("#type").append('<option value="0">Select</option>');
                         $.each(data,function(key,value){
                         $("#type").append('<option value="'+value['id']+'">'+value['type_name']+'</option>');
                });


                    }
                });
            }else{
                $('select[id="type"]').empty();
            }
         });
    });
</script>




@endsection
