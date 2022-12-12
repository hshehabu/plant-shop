<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   public function index(){
   
        $userId=Auth::user()->id;
        $data= Product::where('user_id',$userId)->get();
       
        return view ('Admin.product',compact('data'));
   }

   public function detail($id){

    $data= Product::find($id);
    return view ('detail',['detail'=>$data]);
   }

   public function search(Request $req){
   $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();
       return view('Admin.search',compact('data'));
    }
  
    public function editProduct($id){
        $data=Product::find($id);
                    
        return view('editProduct',['detail'=>$data]);
    }
 
  
}
