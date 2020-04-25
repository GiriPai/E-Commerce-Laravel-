<?php

namespace App\Http\Controllers\CustomerControllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Cart;
use Auth;
use App\Models\Stock;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart_list = Cart::with('product')->where('user_id','=',Auth::user()->id)->get();
        // return $cart_list;
        return view('customers.ecom_pages.cart',['cart_list' => $cart_list]);
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
         // return $request;
          $item = new Cart();
          $item->user_id = $request->user_id;
          $item->product_id = $request->product_id;
          $item->price = $request->price;
          $item->quantity = 1;
          $item->total_amount = $request->price;
          $item->save();
          return redirect()->back()->with('message', 'Product is added to Cart');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cart)
    {
      // return $request;
      $item = Cart::find($cart);
      $item->quantity = $request->quantity;
      $item->total_amount = $request->total_amount;
      $item->save();
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($cart)
    {
      // return $cart;
      $item = Cart::find($cart);
      $item->delete();
      // return $item;
      return redirect()->back()->with('message','Product has been removed from your cart');
    }

    public function delete_cart($cart)
    {

        $flight = Cart::find($cart);
        $flight->delete();
        // return back();

    }

    public static function get_stock_available_for_product($id)
    {
      return Stock::where('product_id','=', $id)
                    ->get();
    }

}
