<?php

namespace App\Http\Controllers;
use App\Models\order;
use App\Models\deliverd;
use Illuminate\Http\Request;

class DeliverdController extends Controller
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
    public function deliverd($id){
      
        $order= order::find($id);
        $deliverd= new deliverd ;
       
        $deliverd->name=$order->name;
        $deliverd->phone=$order->phone;
        $deliverd->address=$order->address;
        $deliverd->email=$order->emai;
        $deliverd->quantity=$order->quantity;
        $deliverd->price=$order->price;
        $deliverd->product_title=$order->product_title;
        $deliverd->image=$order->image;
        $deliverd->product_id=$order->product_id;
        $deliverd->user_id=$order->user_id;
        $deliverd->payment_status='Paid';
        $deliverd->delivery_status='Deliverd';
        $deliverd->save();
        $order_id =$order->id;
        $order= order::find($order_id);
        $order->delete();
       return redirect()->back();
    }
    public function deliverd_show(){
        $deliverd = deliverd::all();
        return view('admin.deliverd',compact('deliverd'));
    }
    public function delete_deliverd($id){
        $deliverd= deliverd::find($id);
        $deliverd->delete();
        return redirect()->back();
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
     * @param  \App\Models\deliverd  $deliverd
     * @return \Illuminate\Http\Response
     */
    public function show(deliverd $deliverd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\deliverd  $deliverd
     * @return \Illuminate\Http\Response
     */
    public function edit(deliverd $deliverd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\deliverd  $deliverd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, deliverd $deliverd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\deliverd  $deliverd
     * @return \Illuminate\Http\Response
     */
    public function destroy(deliverd $deliverd)
    {
        //
    }
}
