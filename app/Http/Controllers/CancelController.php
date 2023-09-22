<?php

namespace App\Http\Controllers;
use App\Models\order;
use App\Models\cancel;
use Illuminate\Http\Request;

class CancelController extends Controller
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
    public function cancel($id){
        $order= order::find($id);
        $cancel= new cancel ;
       
        $cancel->name=$order->name;
        $cancel->phone=$order->phone;
        $cancel->address=$order->address;
        $cancel->email=$order->emai;
        $cancel->quantity=$order->quantity;
        $cancel->price=$order->price;
        $cancel->product_title=$order->product_title;
        $cancel->image=$order->image;
        $cancel->product_id=$order->product_id;
        $cancel->user_id=$order->user_id;
        $cancel->payment_status='Cancelled';
        $cancel->delivery_status='Cancelled';
        $cancel->save();
        $order_id =$order->id;
        $order= order::find($order_id);
        $order->delete();
       return redirect()->back();
    }
    public function cancelorders(){
        $cancel = cancel::all();
        return view('admin.cancelorders',compact('cancel'));
    }
    public function delete_cancelorder($id){
        $cancel= cancel::find($id);
        $cancel->delete();
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
     * @param  \App\Models\cancel  $cancel
     * @return \Illuminate\Http\Response
     */
    public function show(cancel $cancel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cancel  $cancel
     * @return \Illuminate\Http\Response
     */
    public function edit(cancel $cancel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cancel  $cancel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cancel $cancel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cancel  $cancel
     * @return \Illuminate\Http\Response
     */
    public function destroy(cancel $cancel)
    {
        //
    }
}
