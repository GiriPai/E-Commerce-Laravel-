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
                            <li class="breadcrumb-item"><a href="{{route('home.index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Classifications</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add a new Classification</li>
                        </ol>
                    </nav>
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
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('categories.store')}}" method = "POST" enctype="multipart/form-data">
                            <div class="form-body">
                                <h5 class="card-title">Add a Category</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Category Name</label>
                                            <input type="text" name="category_name" id="firstName" class="form-control" placeholder="Category Name"> </div>
                                    </div>

                                </div>
                                <!--/row-->
                                <!--/row-->
                                <div class="row">
                                    <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Category</label>
                                            <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                <option value="Category 1">Category 1</option>
                                                <option value="Category 2">Category 2</option>
                                                <option value="Category 3">Category 5</option>
                                                <option value="Category 4">Category 4</option>
                                            </select>
                                        </div>
                                    </div> -->
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
                                <div class="row">
                                   <!--  <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div> -->
                                    <!--/span-->
                                   <!--  <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon2"><i class="ti-cut"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Discount" aria-label="Discount" aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                    </div> -->
                                    <!--/span-->
                                </div>
                                <h5 class="card-title m-t-40">Product Description</h5>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <textarea class="form-control" name="product_description" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Meta Title</label>
                                            <input type="text" class="form-control"> </div>
                                    </div> -->
                                    <!--/span-->
                                   <!--  <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Meta Keyword</label>
                                            <input type="text" class="form-control"> </div>
                                    </div> -->
                                    <!--/span-->
                                    <div class="col-md-3">
                                        <h5 class="card-title m-t-20">Upload Image</h5>
                                 <!--        <div class="el-element-overlay">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="/assets/images/gallery/chair3.jpg" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="list-style-none el-info">
                                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="/assets/images/gallery/chair3.jpg"><i class="icon-magnifier"></i></a></li>
                                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="btn btn-info waves-effect waves-light"><span>Upload Image</span>
                                            <input type="file" id="thefile" name="image"  />

                                    </div>
                                </div>
                               <!--  <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="card-title m-t-40">GENERAL INFO</h5>
                                        <div class="table-responsive">
                                            <table class="table table-bordered td-padding">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Brand">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Stellar">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Delivery Condition">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Knock Down">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Seat Lock Included">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Yes">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Type">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Office Chair">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Style">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Contemporary &amp; Modern">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Wheels Included">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Yes">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Upholstery Included">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Yes">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> -->
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
@endsection
