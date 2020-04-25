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
                <h4 class="page-title">Products Checkout</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('customer_dashboard.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
            <!-- <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="m-t-0"><i class="fab fa-cc-visa text-info"></i></h1>
                        <h3>**** **** **** 2150</h3>
                        <span class="pull-right">Exp date: 10/16</span>
                        <span class="font-500">Johnathan Doe</span>
                    </div>
                </div>
            </div> -->
            <!-- Column -->
            <!-- Column -->
            <!-- <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="m-t-0"><i class="fab fa-cc-mastercard text-primary"></i></h1>
                        <h3>**** **** **** 2150</h3>
                        <span class="pull-right">Exp date: 10/16</span>
                        <span class="font-500">Johnathan Doe</span>
                    </div>
                </div>
            </div> -->
            <!-- Column -->
            <!-- Column -->
            <!-- <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="m-t-0"><i class="fab fa-cc-discover text-success"></i></h1>
                        <h3>**** **** **** 2150</h3>
                        <span class="pull-right">Exp date: 10/16</span>
                        <span class="font-500">Johnathan Doe</span>
                    </div>
                </div>
            </div> -->
            <!-- Column -->
            <!-- Column -->
            <!-- <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="m-t-0"><i class="fab fa-cc-amex text-warning"></i></h1>
                        <h3>**** **** **** 2150</h3>
                        <span class="pull-right">Exp date: 10/16</span>
                        <span class="font-500">Johnathan Doe</span>
                    </div>
                </div>
            </div> -->
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">PRODUCT SUMMARY</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <form method="post" action="{{route('orders.store')}}"  class="orders_ins" style="display:hidden">

                                  @foreach($cart_list as $list)
                                    <tr>

                                        <td><img src="{{Storage::url($list->product->product_image)}}" alt="iMac" width="80"></td>
                                        <td>{{ $list->product->product_name }} </td>
                                        <td>{{ $list->quantity }}</td>
                                        <td class="font-500">{{ $list->total_amount }}</td>
                                        <input type="hidden" name="something" class="cash" id="payid{{ $list->id}}" value="{{ $list->total_amount }}">

                                            @csrf
                                            <input type="hidden" name="count" value="{{$cart_list->count()}}">
                                            <input type="hidden" name="cart_id[]" value="{{ $list->id }}">

                                            <input type="hidden" name="product_id[]" value="{{ $list->product_id }}">
                                            <input type="hidden" name="quantity[]" value="{{ $list->quantity }}">
                                            <input type="hidden" name="price[]" value="{{ $list->price }}">

                                    </tr>
                                      <!-- <form method="post" action="{{route('delete_cart',$list->id)}}"  class="delete_cart" style="display:hidden">

                                                @method('DELETE')
                                                @csrf

                                                <input type="hidden" name="cart_id[]" value="{{ $list->id }}">

                                        </form> -->
                                  @endforeach
                                    </form>
                                    <!-- @foreach($cart_list as $list) -->
                                    <!-- <form method="post" action="{{route('delete_cart',$list->id)}}"  class="delete_cart" style="display:hidden">
                                              @method('DELETE')
                                              @csrf
                                              <input type="hidden" name="cart_id" value="{{ $list->id }}">
                                      </form>
                                      @endforeach -->
                                    <tr>
                                        <td colspan="3" class="font-500" align="right">Total Amount</td>
                                        <td class="font-500" id="payment"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <h5 class="card-title">Choose payment Option</h5>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="nav-item">
                                <a href="#iprofile" class="nav-link active" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
                                <span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"> Debit Card</span>
                            </a>
                            </li>
                            <!-- <li role="presentation" class="nav-item">
                                <a href="#ihome" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">
                                <span class="visible-xs"><i class="ti-user"></i></span>
                                <span class="hidden-xs">Paypal</span>
                            </a>
                            </li> -->
                        </ul>
                        <div class="tab-content">
                            <!-- <div role="tabpanel" class="tab-pane" id="ihome">
                                <br/> You can pay your money through paypal, for more info <a href="#">click here</a>
                                <br>
                                <br>
                                <button class="btn btn-info"><i class="fab fa-cc-paypal"></i> Pay with Paypal</button>
                            </div> -->
                            <div role="tabpanel" class="tab-pane active" id="iprofile">
                                <div class="row">
                                    <div class="col-md-7">
                                        <!-- <form method="post" action=""> -->
                                            <div class="form-group input-group m-t-40">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-cc-visa"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Card Number" aria-label="Amount (to the nearest dollar)">
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-7 col-md-7">
                                                    <div class="form-group">
                                                        <label>EXPIRATION DATE</label>
                                                        <input type="text" class="form-control" name="Expiry" placeholder="MM / YY"> </div>
                                                </div>
                                                <div class="col-xs-5 col-md-5 pull-right">
                                                    <div class="form-group">
                                                        <label>CV CODE</label>
                                                        <input type="text" class="form-control" name="CVC" placeholder="CVC"> </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>NAME OF CARD</label>
                                                        <input type="text" class="form-control" name="nameCard" placeholder="NAME AND SURNAME"> </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-info" id="submit">Make Payment</button>
                                        <!-- </form> -->
                                    </div>
                                    <!-- <div class="col-md-4 ml-auto">
                                        <h4 class="card-title m-t-30">General Info</h4>
                                        <h2><i class="fab fa-cc-visa text-info"></i> <i class="fab fa-cc-mastercard text-danger"></i> <i class="fab fa-cc-discover text-success"></i> <i class="fab fa-cc-amex text-warning"></i></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                    </div> -->
                                </div>
                            </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type = "text/javascript">
    $( document ).ready(function() {
        var sum = 0;
        $('.cash').each(function() {
            sum += Number($(this).val());
        });
        console.log(sum);
        $('#payment').text('$ ' + sum);
    });
</script>
<script type = "text/javascript">
    $('#submit').click(function() {
        var sum = 0;
        $('.orders_ins').each(function() {
            console.log(this);
            $(this).submit();

        });
        // $('.delete_cart').each(function() {
        //     $('.delete_cart').submit();
        //
        // });

    });
</script>
@endsection
