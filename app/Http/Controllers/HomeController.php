<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\Delivered;
use App\Models\Person;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $userId = Auth::user()->id;
        $data = Order::where('status','completed')->sum('total');
        $product = DB::table('order_items')
            ->join('product', 'order_items.product_id', '=', 'product.id')->get();
        
        $sales = Order::where('status','completed')->whereDate('created_at',Carbon::today())->sum('total');
        $person = Person::all()->count();
        $pend=Order::where('status','pending')->count();
        $comp=Order::where('status','completed')->count();

       $completed=Order::where('status','completed')->where('visible','1')->first();
        $new =Person::whereDate('created_at',Carbon::today())->count();
        return view('Admin.home', compact('data','person','sales','product','pend','comp','new','completed'));
    }
   
   
    public function setting()
    {

        return view('Admin.setting');
    }
    public function update(Request $req)
    {
        $req->validate([
            'password' => 'required|string|confirmed|min:8',
        ]);
        $id=Auth::id();
        $user = User::find($id);
        $user->name = $req['name'];
        $user->email = $req['email'];
        $user->username = $req['username'];
        $user->password = Hash::make($req['password']);
        $user->update();
        return back()->with('message', 'Profile Updated');
    }
}
