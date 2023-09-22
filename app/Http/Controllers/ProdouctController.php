<?php

namespace App\Http\Controllers;

use App\Models\Prodouct;

use App\Models\view_category;
use Illuminate\Http\Request;

class ProdouctController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = view_category::all();
        $product = Prodouct::paginate(3);
        return view('admin.view_product',compact('product','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= view_category::all();

        return view('admin.add_product',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $product = new Prodouct();
      $product->title=$request->title;
      $product->description=$request->description;
      $product->price=$request->price;
      $product->discount_price=$request->discount_price;
      $product->category=$request->category;
    

    if ($request->image) {
        $ext = $request->image->getClientOriginalExtension();
        $newFileName = time().'.'.$ext;
        $request->image->move(public_path().'/uploads/employees/',$newFileName); // This will save file in a folder
        
        $product->image = $newFileName;
        $product->save();
    }
      $product->quantity =$request->quantity;
      $product->save();
      return redirect()->back();
           

      
    }
    public function delete_product($id){
        $data= prodouct::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function edit_product(Prodouct $prodouct)
    {

       $product1 = prodouct::all();
       return view('view_product', compact('product1'));
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prodouct  $prodouct
     * @return \Illuminate\Http\Response
     */
    public function show(Prodouct $prodouct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prodouct  $prodouct
     * @return \Illuminate\Http\Response
     */
    public function edit(Prodouct $prodouct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prodouct  $prodouct
     * @return \Illuminate\Http\Response
     */
  
    public function update(Request $request, $id)
{
    $validator = Prodouct::make($request->all(),[
        'title' => 'required',
     
   
       'description'=>'required',
      'quantity'=>'required',
       
       'category'=>'required',
       'price'=>'required',
       'discount_price'=>'required',
       
    ]);
    if ( $validator->update() ) {
        $product = product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->save();
    //Upload Image
    if ($request->image) {
        $oldImage = $product->image;
        $ext = $request->image->getClientOriginalExtension();
        $newFileName = time().'.'.$ext;
        $request->image->move(public_path().'/uploads/employees/',$newFileName); // This will save file in a folder
        
        $product->image = $newFileName;
        $product->save();
        File::delete(public_path().'/uploads/employees/'.$oldImage);
    }

        $request->session()->flash('success','Employee Updated Successfully! ');
        return redirect()->back();
    }else {
        return redirect()->back();
    }
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prodouct  $prodouct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prodouct $prodouct)
    {
        //
    }
}
