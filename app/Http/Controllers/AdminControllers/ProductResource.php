<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Classification;
use App\Models\Category;
use App\Models\Stock;

class ProductResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['category:id,category_name','classification:id,class_name','type:id,type_name'])->get();
        return view('admins.sections.product_index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classification_list = Classification::all('id','class_name');
        $category_list = Category::all('id','category_name');
        return view('admins.sections.product_add',[
            'classification_list'   => $classification_list,
            'category_list'         => $category_list
        ]);
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
        $product = new Product;
        $product->category_id   = $request->category;
        $product->type_id       = $request->type;
        $product->product_name  = $request->name;
        $product->classification_id = $request->classification;
        $product->price         = $request->price;
        $product->discount      = $request->discount;
        $product->discounted_price = $request->price - ($request->price * ($request->discount / 100));
        $product->p_description = $request->product_description;
        $product->is_active     = $request->customRadioInline1;
        // $product->product_image = $request->image;

        if($request->hasFile('image'))
            {
                $pic = $request->image->getClientOriginalName();
                $path =  $request->file('image')->storeAs('public/products',$pic);
                // return $path;
                $product->product_image = $path;
            }
        $product->save();
        // return $product->id;
        $stock = new Stock();
        $stock->product_id = $product->id;
        $stock->initial_stock = 0;
        $stock->available_stock = 0;
        $stock->is_active = 0;
        $stock->save();

        return redirect()->route('products.index');

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
        $product = Product::with(['category','classification','type'])->where('id',$id)->get();
        // return $product;
        $classification_list = Classification::all('id','class_name');
        $category_list = Category::all('id','category_name');
        return view('admins.sections.product_edit',[
            'classification_list'   => $classification_list,
            'category_list'         => $category_list,
            'product'               => $product
        ]);
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
        $product = Product::find($id);
        $product->category_id   = $request->category;
        $product->type_id       = $request->type;
        $product->product_name  = $request->name;
        $product->classification_id = $request->classification;
        $product->price         = $request->price;
        $product->discount      = $request->discount;
        $product->discounted_price = $request->price - ($request->price * ($request->discount / 100));
        $product->p_description = $request->product_description;
        $product->is_active     = $request->customRadioInline1;
        // $product->product_image = $request->image;

        if($request->hasFile('image'))
            {
                $pic = $request->image->getClientOriginalName();
                $path =  $request->file('image')->storeAs('public/products',$pic);
                // return $path;
                $product->product_image = $path;
            }
            else
            {
                $product->product_image = $request->img_url;
            }
        $product->save();

        return redirect()->route('products.index');
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
