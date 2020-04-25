<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Classification;
use App\Models\Orders;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allstocks = Stock::with('product','product.classification','product.type','product.category')->get();
        // return $allstocks;
        return view('admins.sources.stocks',['allstocks'=> $allstocks]);
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
        return "here";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "that";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stocks = Stock::with('product')->where('id','=',$id)->get();
        // return $stocks;
        return view("admins.sources.stocks_edit",['stocks'=>$stocks]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stock = Stock::find($id);
        $stock->initial_stock = $request->initial;
        $stock->available_stock = $request->available;
        $stock->save();
        return redirect()->route('stock.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
        $stock = Stock::find($id);
        $stock->initial_stock = 0;
        $stock->available_stock = 0;
        $stock->is_active = 0;
        $stock->save();
        return redirect()->route('stock.index');
    }

    public function all_sales()
    {
      $sales = Orders::with(['user','product.classification','product.type','product.category'])->get();
      // return $sales;
      return view('admins.sources.sales',compact('sales'));
    }
}
