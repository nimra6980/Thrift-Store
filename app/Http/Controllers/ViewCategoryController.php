<?php

namespace App\Http\Controllers;

use App\Models\view_category;
use Illuminate\Http\Request;

class ViewCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function view_category(){
        $data = view_category::all();

        return view ('admin.view_category',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new view_category();
        $data->category_name=$request->category_name;
        $data->category_type=$request->category_type;
        $data->save();
        return redirect()->back();
    }
public function delete_category($id){
    $data= view_category::find($id);
    $data->delete();
    return redirect()->back()->with('message','Data Deleted Successfully');
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\view_category  $view_category
     * @return \Illuminate\Http\Response
     */
    public function show(view_category $view_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\view_category  $view_category
     * @return \Illuminate\Http\Response
     */
    public function edit(view_category $view_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\view_category  $view_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, view_category $view_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\view_category  $view_category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
