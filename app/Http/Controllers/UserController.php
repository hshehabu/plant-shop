<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Product;

class UserController extends Controller
{
    //
   public function log(Request $req) {
    
        $user = Person::where(['phone'=>$req->phone])->first();
        if($user){
            $req->session()->put('user',$user);
            return redirect('/');
        }
        else {
           return redirect('/log')->with('status','የማይታወቅ ቁጥር');
        }
    }
   public function reg(Request $req){
    $req->validate([
        'phone' => ['numeric','unique:person']
        
    ]);
        $user =new Person;
        $user->phone=$req->phone;
        $user->save();
        return redirect('/log')->with('status','ተመዝግቧል');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
     public function search(Request $req){
     $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->paginate(8);
       return view('search',compact('data'));
    }
}
