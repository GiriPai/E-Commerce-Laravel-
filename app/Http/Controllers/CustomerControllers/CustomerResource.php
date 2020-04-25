<?php

namespace App\Http\Controllers\CustomerControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Classification;
use App\Models\Type;
use App\Models\Category;
use App\Models\Product;
use App\Models\Orders;
use DB;
use App\User;
use Auth;
use Hash;

class CustomerResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $top = Orders::with('product.category')
              // ->select('product_id')
              ->select(DB::raw('SUM(quantity) as quantity, product_id','product_id'))
              ->groupBy('product_id')
              ->orderBy('quantity','desc')
              ->limit(20)
              ->get();

        // $top = DB::table('orders')
        //         // ->select('product_id')
        //         ->select(DB::raw('SUM(quantity) as quantity, product_id','product_id'))
        //         ->groupBy('product_id')
        //         ->orderBy('quantity','desc')
        //         ->limit(20)
        //         ->get();
        // return $top;
        return view('customers.customer_dashboard',['top' => $top]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $prof = User::find(Auth::user()->id);
        return view('customers.profile',compact('prof'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $prof = User::find(Auth::user()->id);
        $prof->name = $request->name;
        $prof->email =$request->email;
        // $prof->password = Hash::make($request->p1);
        $prof->phone= $request->phone;
        $prof->address= $request->address;
        $prof->save();
        return redirect()->back()->with('message','Profile Updated Successfully');

        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //-----------classification----------------------------------------------------
    public static function getclassifications()
    {
        return Classification::all();
    }

    public function classification($id)
    {

        // $classification_prod_list = Classification::find($id)->product;

        $classification_prod_list = Product::with('classification')->where('classification_id','=',$id)->get();

        // $classification_prod_list = DB::table('classification')->
        // return $classification_prod_list;
        return view('customers.ecom_pages.classifications_prod',
            ['classification_prod_list' => $classification_prod_list ]);
    }

    public static function get_classification_for_product($id)
    {
      return Classification::where('id','=', $id)->get();
    }

    //---------type------------------------------------------------------------------
    public static function gettypes()
    {
        return Type::all();
    }

    public function type($id)
    {
        $type_prod_list = Type::find($id)->product;
        // return $type_prod_list;
        return view('customers.ecom_pages.types_prod',
            ['type_prod_list' => $type_prod_list]);
    }

    public static function get_type_for_product($id)
    {
        return Type::where('id','=', $id)->get();
    }

    //------------categories---------------------------------------------------------
    public static function getcategories()
    {
        return Category::all();
    }

    public function category($id)
    {
        $category_prod_list = Category::with('product')->where('id','=',$id)->get();
        // return $category_prod_list;
        return view('customers.ecom_pages.categories_prod',
            ['category_prod_list' => $category_prod_list]);
    }

    public static function get_category_for_product($id)
    {
      return Category::where('id','=', $id)->get();
    }

    //--------------------------------------------------------------------------
    public function details($id)
    {

      $details = Product::with(['category','classification','type'])->where('id','=',$id)->get();
      // return $details;
      return view('customers.ecom_pages.product_details', ['details' => $details]);
    }
}
