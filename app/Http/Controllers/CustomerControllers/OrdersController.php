<?php

namespace App\Http\Controllers\CustomerControllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Auth;
use App\Models\Stock;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $orders = Orders::with('product')->where('user_id','=',Auth::user()->id)->get();
      // return $orders;
        return view('customers.ecom_pages.orders',['orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        for ($i=0; $i<$request->count; ++$i) {

            $item = new Orders();
            $item->user_id = Auth::user()->id;
            $item->product_id = $request->product_id[$i];
            $item->quantity = $request->quantity[$i];
            $item->price = $request->price[$i];
            $item->save();
              // return $request->product_id[$i];
            $stock = Stock::where('product_id','=',$request->product_id[$i])->limit(1)->get();
            // return $stock;
            foreach($stock as $s){
              $s->available_stock =  $s->available_stock - $request->quantity[$i];
              $s->save();
            }
            // $stock->save();

            $cart = Cart::where('product_id','=',$request->product_id[$i])
                          ->where('user_id','=',Auth::guard()->user()->id)
                          ->delete();

          //   if($item->save()){
          //   $url ='localhost:8000/customer/cart/delete/'.+$request->cart_id[$i];
          //   // return $url;
          //   $ch = curl_init();
          //   curl_setopt($ch, CURLOPT_URL, $url);
          //   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
          //   $result = curl_exec($ch);
          //   $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
          //   curl_close($ch);
          // }

        }
        // $item = new Orders();
        // $item->user_id = Auth::user()->id;
        // $item->product_id = $request->product_id;
        // $item->quantity = $request->quantity;
        // $item->price = $request->price;
        // $item->save();
        return redirect()->route("customer_dashboard.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $orders)
    {
        //
    }
    public function checkout()
    {
        $cart_list = Cart::with('product')->where('user_id','=',Auth::user()->id)->get();
        // return $cart_list;
        return view('customers.ecom_pages.checkout',['cart_list' => $cart_list]);
    }
}
