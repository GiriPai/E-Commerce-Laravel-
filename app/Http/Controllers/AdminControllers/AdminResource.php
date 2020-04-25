<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stock;
use App\Models\Orders;
use App\User;
use App\Models\Refurbish;
use App\Models\Type;
use App\Models\Classification;
use App\Models\Category;
use App\Models\Product;



class AdminResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth:admin');
     }
    public function index()
    {
        $category = Category::all();
        $product = Product::all();
        $classification = Classification::all();
        $orders = Orders::all();
        $type = Type::all();
        $users = User::all();
        $refurbish = Refurbish::all();

        return view('admins.admin_dashboard',[
                                              'category' => $category,
                                              'orders'  => $orders,
                                              'refurbish' => $refurbish,
                                              'products' => $product,
                                              'users' => $users,
                                              'category' => $category,
                                              'type'=> $type,
                                              'classification' => $classification
                                              ]);
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
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
}
