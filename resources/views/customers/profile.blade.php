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
               <h4 class="page-title">User Profile</h4>
               <div class="d-flex align-items-center">
                   <nav aria-label="breadcrumb">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="{{ route('customer_dashboard.index') }}">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">profile</li>
                       </ol>
                   </nav>
               </div>
           </div>
           <div class="col-7 align-self-center">
               <div class="d-flex no-block justify-content-end align-items-center">
                 @if (session('message'))
                  <div class="alert alert-info">
                      {{ session('message') }}
                  </div>
                @endif
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
       <form method="post" action="{{route('customers.profile.update')}}">
         @csrf
         <div class="col-12">
           <div class="card">
               <div class="card-body">
                   <h4 class="card-title">Profile Update</h4>
                   <form class="m-t-40" novalidate>
                       <div class="form-group">
                           <h5>Name <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="text" name="name" class="form-control"  value="{{$prof->name}}" required data-validation-required-message="This field is required"> </div>

                       </div>
                       <div class="form-group">
                           <h5>Email <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="email" name="email" class="form-control" value="{{$prof->email}}" required data-validation-required-message="This field is required"> </div>
                       </div>
                       <!-- <div class="form-group">
                           <h5>Password <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="password" name="p1" class="form-control" required data-validation-required-message="This field is required" placeholder="Password will not appear for security purpose. You can update password here"> </div>
                       </div>
                       <div class="form-group">
                           <h5>Repeat Password <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="password" name="p2" data-validation-match-match="password" class="form-control" placeholder="Password will not appear for security purpose. You can update password here" required> </div>
                       </div> -->
                       <!-- <div class="form-group">
                           <h5>File Input Field <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="file" name="file" class="form-control" required> </div>
                       </div> -->
                       <!-- <div class="form-group">
                           <h5>Input with Icon <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <div class="input-group">
                                   <input type="text" class="form-control" placeholder="Addon To Right" data-validation-required-message="This field is required">
                                   <div class="input-group-append">
                                       <span class="input-group-text"><i class="fa fa-dollar"></i></span>
                                   </div>
                               </div>
                           </div>
                       </div> -->
                       <!-- <div class="form-group">
                           <h5>Phone Number <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="text" name="maxChar" class="form-control" required data-validation-required-message="This field is required" maxlength="10">
                           </div>
                           <div class="form-control-feedback"><small>Add <code>maxlength='10'</code> attribute for maximum number of characters to accept. </small></div>
                       </div> -->
                       <!-- <div class="form-group">
                           <h5>Minimum Character Length <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="text" name="minChar" class="form-control" required data-validation-required-message="This field is required" minlength="6">
                           </div>
                           <div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div>
                       </div> -->
                       <!-- <div class="form-group">
                           <h5>Only Numbers <span class="text-danger">*</span></h5>
                           <div class="input-group">
                               <div class="input-group-append">
                                   <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                               </div>
                               <input type="number" name="onlyNum" class="form-control" required data-validation-required-message="This field is required">
                               <div class="input-group-append">
                                   <span class="input-group-text">0.00</span>
                               </div>
                           </div>
                       </div> -->
                       <!-- <div class="form-group">
                           <h5>Maximum Number <span class="text-danger">*</span></h5>
                           <input type="text" name="maxNum" class="form-control" required data-validation-required-message="This field is required" max="25">
                           <div class="form-control-feedback"> <small><i>Must be lower than 25</i></small> - <small>Add <code>max</code> attribute for maximum number to accept. Also use <code>data-validation-max-message</code> attribute for max failure message</small> </div>
                       </div> -->
                       <div class="form-group">
                           <h5>Phone Number <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="text" name="phone" class="form-control" value="{{$prof->phone}}" required data-validation-required-message="This field is required" min="10" max="10">
                           </div>
                           <!-- <div class="form-control-feedback"><small><i>Must be higher than 10</i></small> - <small>Add <code>min</code> attribute for minimum number to accept. Also use <code>data-validation-min-message</code> attribute for min failure message</small></div> -->
                       </div>
                       <!-- <div class="form-group">
                           <h5>Text Input Range <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required" minlength="10" maxlength="20" placeholder="Enter number between 10 &amp; 20"> </div>
                       </div> -->
                       <!-- <div class="form-group">
                           <h5>Input with Button <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <div class="input-group">
                                   <input type="text" class="form-control" placeholder="Search" required> <span class="input-group-btn">
                                         <button class="btn btn-info" type="button">Go!</button>
                                       </span> </div>
                           </div>
                       </div> -->
                       <!-- <div class="form-group">
                           <h5>No Characters, Only Numbers <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="text" name="noChar" class="form-control" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="No Characters Allowed, Only Numbers"> </div>
                       </div> -->
                       <!-- <div class="form-group">
                           <h5>Pattern <span class="text-danger">*</span> <small><i>Must start with 'a' and end with 'z'</i></small></h5>
                           <div class="controls">
                               <input type="text" name="pattern" pattern="a.*z" data-validation-pattern-message="Must start with 'a' and end with 'z'" class="form-control" required>
                               <div class="form-control-feedback"><small>Add <code>pattern</code> attribute to set input pattern. Also use <code>data-validation-pattern-message</code> attribute for pattern failure message</small></div>
                           </div>
                       </div> -->
                       <!-- <div class="form-group">
                           <h5>URL <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="text" class="form-control" name="url" placeholder="Add URL" data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*" data-validation-regex-message="Only Valid URL's">

                           </div>
                       </div> -->
                       <!-- <div class="form-group">
                           <h5>Email Address <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="text" class="form-control" placeholder="Email Address" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email"> </div>
                       </div> -->
                       <!-- <div class="form-group">
                           <h5>Enter Date <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="text" class="form-control" placeholder="MM/DD/YYYY" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email"> </div>
                       </div> -->
                       <!-- <div class="form-group">
                           <h5>Basic Select <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <select name="select" id="select" required class="form-control">
                                   <option value="">Select Your City</option>
                                   <option value="1">India</option>
                                   <option value="2">USA</option>
                                   <option value="3">UK</option>
                                   <option value="4">Canada</option>
                                   <option value="5">Dubai</option>
                               </select>
                           </div>
                       </div> -->
                       <div class="form-group">
                           <h5>Address <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <textarea name="address" id="textarea"  class="form-control" required placeholder="Your Address"> {{$prof->address}}</textarea>
                           </div>
                       </div>
                       <!-- <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                   <h5>Checkbox <span class="text-danger">*</span></h5>
                                   <div class="controls">
                                       <div class="custom-control custom-checkbox">
                                           <input type="checkbox" required value="single" class="custom-control-input" id="customCheck1">
                                           <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                   <h5>Checkbox Group <span class="text-danger">*</span></h5>
                                   <div class="controls">
                                       <fieldset>
                                           <div class="custom-control custom-checkbox">
                                               <input type="checkbox" value="x" name="styled_checkbox" required class="custom-control-input" id="customCheck2">
                                               <label class="custom-control-label" for="customCheck2">I am unchecked</label>
                                           </div>
                                       </fieldset>
                                       <fieldset>
                                           <div class="custom-control custom-checkbox">
                                               <input type="checkbox" value="y" name="styled_checkbox" class="custom-control-input" id="customCheck3">
                                               <label class="custom-control-label" for="customCheck3">I am unchecked too</label>
                                           </div>
                                       </fieldset>
                                   </div>
                               </div>
                           </div>
                       </div> -->
                       <!-- <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                   <h5>Select Max 2 Checkbox<span class="text-danger">*</span></h5>
                                   <div class="controls">
                                       <fieldset>
                                           <div class="custom-control custom-checkbox">
                                               <input type="checkbox" name="styled_max_checkbox" data-validation-maxchecked-maxchecked="2" data-validation-maxchecked-message="Don't be greedy!" required class="custom-control-input" id="customCheck4">
                                               <label class="custom-control-label" for="customCheck4">I am unchecked checkbox</label>
                                           </div>
                                       </fieldset>
                                       <fieldset>
                                           <div class="custom-control custom-checkbox">
                                               <input type="checkbox" name="styled_max_checkbox" class="custom-control-input" id="customCheck5">
                                               <label class="custom-control-label" for="customCheck5">I am unchecked too</label>
                                           </div>
                                       </fieldset>
                                       <fieldset>
                                           <div class="custom-control custom-checkbox">
                                               <input type="checkbox" name="styled_max_checkbox" class="custom-control-input" id="customCheck6">
                                               <label class="custom-control-label" for="customCheck6">You can check me</label>
                                           </div>
                                       </fieldset>
                                   </div> <small>Select any 2 options</small> </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                   <h5>Minimum 2 Checkbox selection<span class="text-danger">*</span></h5>
                                   <div class="controls">
                                       <fieldset>
                                           <div class="custom-control custom-checkbox">
                                               <input type="checkbox" value="1" data-validation-minchecked-minchecked="2" data-validation-minchecked-message="Choose at least two" name="styled_min_checkbox" required class="custom-control-input" id="customCheck7">
                                               <label class="custom-control-label" for="customCheck7">I am unchecked checkbox</label>
                                           </div>
                                       </fieldset>
                                       <fieldset>
                                           <div class="custom-control custom-checkbox">
                                               <input type="checkbox" value="2" name="styled_min_checkbox" class="custom-control-input" id="customCheck8">
                                               <label class="custom-control-label" for="customCheck8">I am unchecked checkbox too</label>
                                           </div>
                                       </fieldset>
                                       <fieldset>
                                           <div class="custom-control custom-checkbox">
                                               <input type="checkbox" value="3" name="styled_min_checkbox" class="custom-control-input" id="customCheck9">
                                               <label class="custom-control-label" for="customCheck9">You can check me</label>
                                           </div>
                                       </fieldset>
                                   </div> <small>Select any 2 options</small> </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                   <h5>Radio Buttons <span class="text-danger">*</span></h5>
                                   <fieldset class="controls">
                                       <div class="custom-control custom-radio">
                                           <input type="radio" value="1" name="styled_radio" required id="styled_radio1" class="custom-control-input">
                                           <label class="custom-control-label" for="styled_radio1">Check me</label>
                                       </div>
                                   </fieldset>
                                   <fieldset>
                                       <div class="custom-control custom-radio">
                                           <input type="radio" value="2" name="styled_radio" id="styled_radio2" class="custom-control-input">
                                           <label class="custom-control-label" for="styled_radio2">or me</label>
                                       </div>
                                   </fieldset>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                   <h5>Inline Radio Buttons <span class="text-danger">*</span></h5>
                                   <div class="controls">
                                       <fieldset>
                                           <div class="custom-control custom-radio">
                                               <input type="radio" value="Yes" name="styled_inline_radio" required id="styled_radio_inline1" class="custom-control-input">
                                               <label class="custom-control-label" for="styled_radio_inline1">Check me</label>
                                           </div>
                                       </fieldset>
                                       <fieldset>
                                           <div class="custom-control custom-radio">
                                               <input type="radio" value="No" name="styled_inline_radio" id="styled_radio_inline2" class="custom-control-input">
                                               <label class="custom-control-label" for="styled_radio_inline2">or me</label>
                                           </div>
                                       </fieldset>
                                   </div>
                               </div>
                           </div>
                       </div> -->
                       <div class="text-xs-right">
                           <button type="submit" class="btn btn-info">Submit</button>
                           <button type="reset" class="btn btn-inverse">Cancel</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
      </form>
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
