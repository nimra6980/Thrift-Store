<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use App\Models\Prodouct;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function add_cart(Request $request ,$id){
        if(Auth::id()){
            $user=Auth::user();
           $product= Prodouct::find($id);
           $cart= new cart ;
            $cart->name=$user->name;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->emai=$user->email;
            $cart->user_id=$user->id;
            $cart->product_title=$product->title;
            if($product->discount_price!=null){
                $cart->price=$product->discount_price*$request->quantity;
            }
            else{

                $cart->price=$product->price *$request->quantity;
            }
            $cart->image=$product->image;
            $cart->quantity=$request->quantity;
            $cart->product_id=$product->id;
            $cart->save();
            return redirect()->back();
        }
          if(Auth::id()){
              return redirect()->back();
  
        }
         else{
         return redirect('login');
          }
      }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show_cart(){
        if(Auth::id()){

            $id=Auth::user()->id;
            $cart = cart::where('user_id','=',$id)->get();
            return view('user.show_cart',compact('cart'));
        }
        else{
            return redirect('login');
        }
    }
    public function delete_cart($id){
        $cart= cart::find($id);
        $cart->delete();
        return redirect()->back();
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart)
    {
        //
    }

}
