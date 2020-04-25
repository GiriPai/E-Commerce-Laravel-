<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Classification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ClassificationResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classification_list = Classification::all();
       // return $classification_list;
        return view('admins.sections.classification_index')->with('classification_list', $classification_list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.sections.classification_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $classification = new Classification;
        $classification->class_name = $request->class_name;
        $classification->class_short_name = $request->short_name;
        $classification->class_is_active = $request->customRadioInline1;
        // $classification->class_image    = $request->image;
        if($request->hasFile('image'))
            {
                $pic = $request->image->getClientOriginalName();
                $path =  $request->file('image')->storeAs('public/classification',$pic);
                $classification->class_image = $path;
            }
        $classification->save();

        return redirect()->route('classifications.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admins.sections.classification_show');
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

    public function ajax_classification_list()
    {
       // $classification_list = Classification::all('class_name','id');
       $classification_list = DB::table('classification')->select('id','class_name')->get();
        // return response()->json($classification_list);
        return response()->json($classification_list);
    }
}
