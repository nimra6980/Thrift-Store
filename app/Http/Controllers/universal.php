<?php

namespace App\Http\Controllers;
use App\Models\Prodouct;
use App\Models\order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class universal extends Controller
{
    public function homes(){
        return view('user.index');
    }
    public function women(){
        $product = Prodouct::all();
        return view('user.women',compact('product'));
        
    }
    public function men(){
        $product = Prodouct::all();
      
        return view('user.men',compact('product'));
    }
    public function kid(){
        return view('user.kid');
    }
    public function accessories(){
        return view('user.accessories');
    }
    public function dashboard(){
        return view ('admin.index');
    }
    public function product_details($id){
        $product_detail = Prodouct::find($id);
        return view('user.product_details',compact('product_detail'));
    }
 public function order(){
    $order=order::all();
    return view('admin.order',compact('order'));
 }
 
}
