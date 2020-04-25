<?php

namespace App\Http\Controllers\AdminControllers;
use DB;
use App\Models\Type;
use App\Models\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_list = Type::with('category')->get();

        return view('admins.sections.type_index',['type_list' => $type_list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_list = Category::all('id','category_name');
        // return $category_list;
        return view('admins.sections.type_add',['category_list' => $category_list]);
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

        $type_store = new Type();

        $type_store->category_id    = $request->category;
        $type_store->type_name      = $request->type_name;
        $type_store->t_description  = $request->t_description;
        // $type_store->type_image     = $request->type_image;

        if($request->hasFile('type_image'))
            {
                $pic = $request->type_image->getClientOriginalName();
                $path =  $request->file('type_image')->storeAs('public/types',$pic);
                $type_store->type_image = $path;
            }

        $type_store->save();

        return redirect()->route('types.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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

    public function ajax_type_list($id)
    {
       $type_list = DB::table('types')->select('id','type_name')->where('category_id','=',$id)->get();
        //console.log($type_list);
       // return $type_list;

        // $cities = DB::table("types")
        //             ->where("category_id",$id)
        //             ->lists("type_name","id");
        return response()->json($type_list);
    }
}
