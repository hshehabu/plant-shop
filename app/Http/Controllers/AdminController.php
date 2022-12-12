<?php

namespace App\Http\Controllers;
use App\Models\Delivered;
use App\Models\Order;
use Illuminate\Http\Request;
class AdminController extends Controller
{
 protected function index(){
    return redirect()->intended('/home');
 }  
 protected function new(){
    
    return view('Admin.home');
 }  
  public function new_orders(){
    $orders=Order::where('status','pending')->get();
    return view('Admin.new_orders',['orders'=>$orders]);
    }
    public function view($id){
    $orders=Order::where('id',$id)->first();
    return view('Admin.view',compact('orders'));
    }
    public function delivered(){
        $delivered= Delivered::all();
         return view('Admin.delivered',['delivered'=>$delivered]);
    }
    public function update($id,Request $req){
        $orders=Order::find($id);
        $status=$req->input('status');
        $orders->visible=$req->input('visible')== True ? '1':'0';
        if ($status=="0") {
            $orders->status='pending';
            $orders->update();
            return redirect('pending')->with('status','order updated!');
        }
        elseif($status=="1"){
            $orders->status='completed';
            $orders->update();
            return redirect('completed')->with('status','order updated!');

        }
    }
    public function completed(){
        $orders=Order::where('status','completed')->get();
        return view('Admin.completed',['orders'=>$orders]);
    }
    public function orders(){
        $orders=Order::all();
        return view('Admin.orders',['orders'=>$orders]);
    }

}
