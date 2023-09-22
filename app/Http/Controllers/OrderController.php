<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use App\Models\Prodouct;
use Session;
use Stripe;
use App\Models\cart;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
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
    public function cash(){
        $user= Auth::user();
        $userid= $user->id;
        $data=cart::where('user_id','=',$userid)->get();
        foreach($data as $data){
            $order= new order;
            $order->name=$data->name;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->emai=$data->email;
            $order->quantity=$data->quantity;
            $order->price=$data->price;
            $order->product_title=$data->product_title;
            $order->image=$data->image;
            $order->product_id=$data->product_id;
            $order->user_id=$data->user_id;
            $order->payment_status='Cash On Delivery';
            $order->delivery_status='Processing';
            $order->save();
            $cart_id =$data->id;
            $cart= cart::find($cart_id);
            $cart->delete();
        }
        return redirect()->back()->with('message','Your Order Has Been Confirmed ! Will Soon Contact You Once The Order Is Ready To Deliver');
    }
    public function checkout(){
        $id=Auth::user()->id;
        $cart = cart::where('user_id','=',$id)->get();
     
    
        return view('user.checkout',compact('cart'));
    }
    public function stripe($totalprice){
        return view('user.stripe',compact('totalprice'));
    }
    public function stripePost(Request $request,$totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" =>$totalprice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Order Confirmed" 
        ]);
        $user= Auth::user();
        $userid= $user->id;
        $data=cart::where('user_id','=',$userid)->get();
        foreach($data as $data){
            $order= new order;
            $order->name=$data->name;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->emai=$data->email;
            $order->quantity=$data->quantity;
            $order->price=$data->price;
            $order->product_title=$data->product_title;
            $order->image=$data->image;
            $order->product_id=$data->product_id;
            $order->user_id=$data->user_id;
            $order->payment_status='paid';
            $order->delivery_status='Processing';
            $order->save();
            $cart_id =$data->id;
            $cart= cart::find($cart_id);
            $cart->delete();
        Session::flash('success', 'Payment successful!');
              
        return redirect()->back();
    }
}
public function deliverd($id){
    $order = order::find($id);
    $order->delete();
    return redirect()->back();
}
public function back_stripe(){
    return view('user.show_cart');
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
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
