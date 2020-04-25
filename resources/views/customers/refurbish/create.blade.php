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
                 <h4 class="page-title">Product Edit</h4>
                 <div class="d-flex align-items-center">
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="{{ route('customer_dashboard.index') }}">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Refurbish</li>
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
                         <form action="{{ route('refurbish.store') }}" method="post" enctype="multipart/form-data">
                           @csrf
                             <div class="form-body">
                                 <h5 class="card-title">About Product</h5>
                                 <hr>
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label class="control-label">Product Name</label>
                                             <input type="text" id="product_name"  name="product_name" class="form-control" placeholder=""> </div>
                                     </div>
                                     <!--/span-->
                                     <!-- <div class="col-md-6">
                                         <div class="form-group">
                                             <label class="control-label">Sub text</label>
                                             <input type="text" id="lastName" class="form-control" placeholder="globe type chair for rest"> </div>
                                     </div> -->
                                     <!--/span-->
                                 </div>
                                 <!--/row-->
                                 <!--/row-->
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label class="control-label">Category</label>
                                             <select class="form-control" data-placeholder="Choose a Category" tabindex="1" name="category">
                                                 <option value="Integrated Circuites"> Integrated Circuites</option>
                                                 <option value="Electronic Products">Electronic Products</option>
                                                 <option value="Others">Others</option>

                                             </select>
                                         </div>
                                     </div>
                                     <!--/span-->
                                     <!-- <div class="col-md-6">
                                         <div class="form-group">
                                             <label>Status</label>
                                             <br/>
                                             <div class="custom-control custom-radio custom-control-inline">
                                                 <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                 <label class="custom-control-label" for="customRadioInline1">Publish</label>
                                             </div>
                                             <div class="custom-control custom-radio custom-control-inline">
                                                 <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                 <label class="custom-control-label" for="customRadioInline2">Draft</label>
                                             </div>
                                         </div>
                                     </div> -->
                                     <!--/span-->
                                 </div>
                                 <!--/row-->
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label>Quoting Price</label>
                                             <div class="input-group mb-3">
                                                 <div class="input-group-prepend">
                                                     <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                 </div>
                                                 <input type="text" class="form-control" placeholder="price" aria-label="price" name="price" aria-describedby="basic-addon1">
                                             </div>
                                         </div>
                                     </div>
                                     <!--/span-->
                                     <!-- <div class="col-md-6">
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
                                             <textarea class="form-control" rows="4" name="description"></textarea>
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
                                     <!-- <div class="col-md-6">
                                         <div class="form-group">
                                             <label>Meta Keyword</label>
                                             <input type="text" class="form-control"> </div>
                                     </div> -->
                                     <!--/span-->
                                     <div class="col-md-3">
                                         <!-- <h5 class="card-title m-t-20">Upload Image</h5> -->
                                         <!-- <div class="el-element-overlay">
                                             <div class="el-card-item"> -->
                                                 <!-- <div class="el-card-avatar el-overlay-1"> <img src="../../assets/images/gallery/chair3.jpg" alt="user" /> -->
                                                     <!-- <div class="el-overlay">
                                                         <ul class="list-style-none el-info">
                                                             <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../../assets/images/gallery/chair3.jpg"><i class="icon-magnifier"></i></a></li>
                                                             <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                                                         </ul>
                                                     </div> -->
                                                 <!-- </div> -->
                                             <!-- </div>
                                         </div> -->
                                         <div class="btn btn-info waves-effect waves-light"><span>Upload An Image</span>
                                             <input type="file" class="upload" name="file"> </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-md-12">
                                         <h5 class="card-title m-t-40">GENERAL INFO</h5>
                                         <div class="table-responsive">
                                             <table class="table table-bordered td-padding">
                                                 <tbody>
                                                     <tr>
                                                         <td>
                                                             <label type="label" class="form-control" placeholder="Brand">Brand</label>
                                                         </td>
                                                         <td>
                                                             <input type="text" class="form-control" placeholder="" name="brand">
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <td>
                                                           <label type="label" class="form-control" placeholder="Model">Model</label>
                                                       </td>
                                                         <td>
                                                             <input type="text" class="form-control" placeholder="" name="model">
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <td>
                                                           <label type="label" class="form-control" placeholder="Year">Year</label>
                                                         </td>
                                                         <td>
                                                             <input type="date" class="form-control" placeholder="" name='year'>
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <td>
                                                           <label type="label" class="form-control" placeholder="Documents Available">Documents Available</label>
                                                         </td>
                                                         <td>
                                                           <div class="col-md-6">
                                                               <div class="form-group">
                                                                   <div class="custom-control custom-radio custom-control-inline">
                                                                       <input type="radio" id="customRadioInline1" name="radio" class="custom-control-input">
                                                                       <label class="custom-control-label" for="customRadioInline1" value="yes">Yes</label>
                                                                   </div>
                                                                   <div class="custom-control custom-radio custom-control-inline">
                                                                       <input type="radio" id="customRadioInline2" name="radio" class="custom-control-input">
                                                                       <label class="custom-control-label" for="customRadioInline2" value="no">No</label>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                         </td>
                                                     </tr>
                                                 </tbody>
                                             </table>
                                         </div>
                                     </div>
                                 </div>
                                 <hr> </div>
                             <div class="form-actions m-t-40">
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
 @endsection
