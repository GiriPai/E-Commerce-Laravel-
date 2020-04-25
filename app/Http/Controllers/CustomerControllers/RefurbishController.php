<?php

namespace App\Http\Controllers\CustomerControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Refurbish;
use App\User;
use Auth;

class RefurbishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ref = Refurbish::where('user_id','=',Auth::user()->id)->get();
        return view('customers.refurbish.index',compact('ref'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.refurbish.create');
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
      $ref = new Refurbish();
      $ref->user_id = Auth::user()->id;
      $ref->product_name = $request->product_name;
      $ref->category = $request->category;
      $ref->price = $request->price;
      $ref->description = $request->description;
      $ref->brand = $request->brand;
      $ref->model = $request->model;
      $ref->year = $request->year;
      $ref->document = $request->radio;
      $ref->status = '0';

      if($request->hasFile('file'))
          {
              $pic = $request->file->getClientOriginalName();
              $path =  $request->file('file')->storeAs('public/refurbish',$pic);
              $ref->image = $path;
          }
        $ref->save();
        return redirect()->back()->with('message','Your details has been uploaded..!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ref = Refurbish::find($id);
        return view('customers.refurbish.view',compact('ref'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('customers.refurbish.edit');
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
        $ref = Refurbish::find($id);
        $ref->status = $request->status;
        $ref->save();
        return redirect()->back();
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

    public function admin_index()
    {
        $ref = Refurbish::where('status','!=',1)
                          ->orderBy('created_at','desc')
                          ->get();
        return view('admins.refurbish.index',compact('ref'));
    }
    public function admin_purchases()
    {
      $ref = Refurbish::where('status','=',1)
                        ->orderBy('created_at','desc')
                        ->get();
      return view('admins.refurbish.purchases',compact('ref'));
    }
    public function admin_show($id)
    {
      $ref = Refurbish::find($id);
      return view('admins.refurbish.view',compact('ref'));
    }
}
