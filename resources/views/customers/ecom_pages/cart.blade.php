@extends('customers.customers_layouts.master')
@section('content')
@include('customers.customers_layouts.top_nav')
@php
    use App\Http\Controllers\CustomerControllers\CartController;
@endphp

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
                <h4 class="page-title">Product Cart</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('customer_dashboard.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                  @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
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
        <div class="row">
            <!-- Column -->
            <div class="col-md-9 col-lg-9">
                <div class="card">
                    <div class="card-header bg-info">
                        <h5 class="m-b-0 text-white">Your Cart {{ $cart_list->count() }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table product-overview">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product info</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th style="text-align:center">Total</th>
                                        <th style="text-align:center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($cart_list->count() == 0)
                                    <tr>
                                        <td>Your Cart is Empty</td>
                                    </tr>
                                    @else
                                    @foreach($cart_list as $list)


                                      <tr>
                                          <td width="150"><img src="{{ Storage::url($list->product->product_image) }}" alt="iMac" width="80"></td>
                                          <td width="550">
                                              <h5 class="font-500">{{$list->product->product_name}}</h5>
                                              <p>{{ $list->product->p_description }}</p>
                                          </td>
                                          <td width="300"> <input type="text" id="l{{$list->product->discounted_price}}" class="form-control" value= "{{$list->product->discounted_price}}" disabled /></td>
                                          <td width="70">

                                            @php
                                                $stock =  CartController::get_stock_available_for_product($list->product_id);
                                            @endphp
                                              <!-- {{$stock}} -->
                                            @if( $list->quantity == '1' )
                                              @foreach($stock as $max)
                                              <input type="number" class="form-control" placeholder="1" id="quantity{{$list->product->id}}" min="1" max="{{$max->available_stock}}">
                                              @endforeach
                                            @else
                                              @foreach($stock as $max)

                                              <input type="number" class="form-control" placeholder="1" id="quantity{{$list->product->id}}" value="{{$list->quantity}}"  min="1" max="{{$max->available_stock}}">
                                                @endforeach
                                            @endif

                                          </td>
                                          @if( $list->quantity == '1')
                                            <td width="300" align="center" class="font-500"> <input type = "text" value = "{{$list->product->discounted_price}}" id ="{{$list->product->id}}" class = "form-control tamount" disabled/></td>
                                          @else
                                            <td width="300" align="center" class="font-500"> <input type = "text" value = "{{$list->total_amount}}" id ="{{$list->product->id}}" class = "form-control tamount" disabled/></td>
                                          @endif
                                          <td align="center">

                                              <form method="post" class = "form-group" action="{{route('cart.update',$list->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                  <button type="submit" class="form-control" style="border:none"> <i class="ti-trash text-dark"></i></button>
                                              </form>

                                              <form method="post" class = "form-group" action="{{route('cart.destroy',$list->id)}}" id="mass_update{{$list->id}}" style="display:none;">
                                                    @method('PUT')
                                                    <input type="hidden" name="quantity" value="1" id="update_quantity{{$list->id}}"/>
                                                    <input type="hidden" name="total_amount" value="{{$list->product->discounted_price}}" id="update_total{{$list->id}}"/>
                                                    <input type="hidden" name="product_id" value="{{$list->id}}" />
                                                    @csrf
                                                  <!-- <button type="submit" class="form-control" style="border:none"> <i class="ti-trash text-dark"></i></button> -->
                                              </form>

                                          </td>
                                      </tr>
                                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                                      <script type = "text/javascript">
                                      $('document').ready(function() {
                                         $('#quantity{{$list->product->id}}').on('change',function(){

                                                var number = parseInt(this.value) * $('#l{{$list->product->discounted_price}}').val();
                                                console.log(number);
                                                  var a = parseInt(this.value);
                                                  console.log(a);

                                                  var d =$('#l{{$list->product->discounted_price}}').val();
                                                  console.log(d);

                                                  var c = $("#{{$list->product->id}}").val();
                                                  console.log(c);

                                                  var e = $(a * d);
                                                  console.log(e);
                                                  document.getElementById("{{$list->product->id}}").value = number;
                                                  document.getElementById("update_quantity{{$list->id}}").value = a;
                                                  document.getElementById("update_total{{$list->id}}").value = number;

                                                  $('#mass_update{{$list->id}}').submit();
                                                  // $("#{{$list->product->id}}").text(a * d);

                                          });
                                      });
                                      </script>

                                      @endforeach
                                      <!-- <form method="post" action="{{route('cart.destroy',$list->product->id)}}" id="delete{{$list->product->id}}" style="display:none">
                                          @method('DELETE')
                                          @csrf
                                      </form> -->
                                    @endif
                                </tbody>
                            </table>
                            <hr>
                            <div class="d-flex no-block align-items-center">
                                <!-- <button class="btn btn-dark btn-outline"><i class="fas fa-arrow-left"></i> Continue shopping</button> -->
                                <div class="ml-auto">
                                    <a href = "{{ route('customer.checkout') }}">
                                    <button class="btn btn-danger"><i class="fa fa fa-shopping-cart"></i> Checkout</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CART SUMMARY</h5>
                        <hr>
                        <small>Total Price</small>
                        <h2 id = "ttcash">$34</h2>
                        <hr>
                        <a href = "{{ route('customer.checkout') }}"><button class="btn btn-success">Checkout</button></a>
                        <!-- <button class="btn btn-secondary btn-outline">Cancel</button> -->
                    </div>
                </div>
                <!-- <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">For Any Support</h5>
                        <hr>
                        <h4><i class="ti-mobile"></i> 9998979695 (Toll Free)</h4> <small>Please contact with us if you have any questions. We are avalible 24h.</small>
                    </div>
                </div> -->
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
<!-- <script type = "text/javascript">

        var a = 0;
        $(".tamount").each(function() {
            a += parseFloat(this.value);
        });
        console.log(a);

        $(#totalcash).innerHTML = a;


</script> -->
<script>

$( document ).ready(function() {
  var sum = 0;
  $('.tamount').each(function() {
      sum += Number($(this).val());
  });
  console.log(sum);
  $('#ttcash').text(sum);

});

$('body').click(function () {
    var sum = 0;
    $('.tamount').each(function() {
        sum += Number($(this).val());
    });
    console.log(sum);
    $('#ttcash').text() = sum;

    // here, you have your sum
});
</script>
@endsection
