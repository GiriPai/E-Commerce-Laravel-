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
                <h4 class="page-title">Profile</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Detils</li>
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
        <!-- Row -->
        @foreach($details as $d)
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">
                          <!-- <img src="../../assets/images/users/5.jpg" class="rounded-circle" width="150" /> -->
                            <h4 class="card-title m-t-10">{{ $d->name }}</h4>
                            <h6 class="card-subtitle">Customer ID : {{ $d->id }}</h6>
                            <div class="row text-center justify-content-md-center">

                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">{{ count($d->orders) }}</font></a></div>
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">{{ count($d->refurbish) }}</font></a></div>
                            </div>
                        </center>
                    </div>
                    <div>
                        <hr> </div>
                    <div class="card-body"> <small class="text-muted">Email address </small>
                        <h6>{{ $d->email }}</h6> <small class="text-muted p-t-30 db">Phone</small>
                        <h6>{{ $d->phone }}</h6> <small class="text-muted p-t-30 db">Address</small>
                        <h6>{{ $d->address }}</h6>
                        <!-- <div class="map-box">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div> <small class="text-muted p-t-30 db">Social Profile</small>
                        <br/>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button> -->
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Tabs -->
                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Refurbishes</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Setting</a>
                        </li> -->
                    </ul>
                    <!-- Tabs -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
                            <div class="card-body">
                                <div class="profiletimeline m-t-0">
                                  @foreach($d->orders as $order)
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="{{ Storage::url($order->product->product_image) }}" alt="user" class="rounded-circle" /> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)" class="link">{{ $d->name }}</a> <span class="sl-date">{{ $order->created_at->diffForHumans() }}</span>
                                                <p>purchased <a href="javascript:void(0)"> {{ $order->product->product_name }}</a></p>
                                                <div class="row">
                                                      Order ID : {{ $order->id }}<br>
                                                      Category : {{ $order->product->category->category_name }}<br>
                                                      Classification : {{ $order->product->classification->class_short_name }}<br>
                                                      Type :  {{ $order->product->type->type_name }}<br>
                                                      Quantity : {{ $order->quantity }}<br>
                                                      Price : {{ $order->product->price }}<br>


                                                    <!-- <div class="col-lg-3 col-md-6 m-b-20"><img src="../../assets/images/big/img1.jpg" class="img-fluid rounded" /></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="../../assets/images/big/img2.jpg" class="img-fluid rounded" /></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="../../assets/images/big/img3.jpg" class="img-fluid rounded" /></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="../../assets/images/big/img4.jpg" class="img-fluid rounded" /></div> -->
                                                </div>
                                                <!-- <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                          <div class="card-body">
                              <div class="profiletimeline m-t-0">
                                @foreach($d->refurbish as $ref)
                                  <div class="sl-item">
                                      <div class="sl-left"> <img src="{{ Storage::url($ref->image) }}" alt="user" class="rounded-circle" /> </div>
                                      <div class="sl-right">
                                          <div><a href="javascript:void(0)" class="link">{{ $d->name }}</a> <span class="sl-date">{{ $ref->created_at->diffForHumans() }}</span>
                                              <p>posted <a href="javascript:void(0)"> {{ $ref->product_name }}</a></p>
                                              <div class="row">
                                                    Refurbish ID : {{ $ref->id }}<br>
                                                    Category : {{ $ref->category_name }}<br>
                                                    Model : {{ $ref->model }}<br>
                                                    Brand :  {{ $ref->brand }}<br>
                                                    Year : {{ $ref->year }}<br>
                                                    Price : {{ $ref->price }}<br>


                                                  <!-- <div class="col-lg-3 col-md-6 m-b-20"><img src="../../assets/images/big/img1.jpg" class="img-fluid rounded" /></div>
                                                  <div class="col-lg-3 col-md-6 m-b-20"><img src="../../assets/images/big/img2.jpg" class="img-fluid rounded" /></div>
                                                  <div class="col-lg-3 col-md-6 m-b-20"><img src="../../assets/images/big/img3.jpg" class="img-fluid rounded" /></div>
                                                  <div class="col-lg-3 col-md-6 m-b-20"><img src="../../assets/images/big/img4.jpg" class="img-fluid rounded" /></div> -->
                                              </div>
                                              <!-- <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div> -->
                                          </div>
                                      </div>
                                  </div>
                                  @endforeach
                              </div>
                          </div>
                        </div>
                        <!-- <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Message</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Country</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line">
                                                <option>London</option>
                                                <option>India</option>
                                                <option>Usa</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        @endforeach
        <!-- Row -->

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
