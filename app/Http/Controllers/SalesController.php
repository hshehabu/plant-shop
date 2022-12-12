<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\User;
use App\Models\Delivered;
use App\Models\Person;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use phpDocumentor\Reflection\PseudoTypes\True_;

class SalesController extends Controller
{
   public function search(Request $req){
   $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();
       return view('Sales.search',compact('data'));
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected function index(){
        return redirect()->intended('/dash');
     }  
    public function add_sales()
    {
     
        return view('add_sales');
    }

    public function home()
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
        return view('Sales.dash', compact('data','person','sales','product','pend','comp','new','completed'));
    }
    public function manage()
    {
        
        $data= User::where('role','sales')->get();
        return view('manage',['manage'=>$data]);
    }
   
   protected function sales(Request $request){
            
  
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'username' => ['required', 'string', 'min:4','unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
        $sales = new User([
            "name" => $request->get('name'),
            'email' => $request->get('email'),
            'username' =>$request->get('username'),
            'role' => $request->get('role'),
            'status'=>$request->get('status')== True ? '1':'0',
            "password"=>Hash::make($request->get('password')),
    
        ]);
        $sales->save();
        return view('add_sales')->with('message','seller added succesfuly');
    }
    
   
   
       
     public function new_orders(){
    $orders=Order::where('status','pending')->get();
    return view('Sales.new_orders',['orders'=>$orders]);
    }
    public function view($id){
    $orders=Order::where('id',$id)->first();
    return view('Sales.view',compact('orders'));
    }
       public function completed(){
        $orders=Order::where('status','completed')->get();
        return view('Sales.completed',['orders'=>$orders]);
    }
    public function orders(){
        $orders=Order::all();
        return view('Sales.orders',['orders'=>$orders]);
    }
    public function products(){
        $data=Product::all();
        return view('Sales.products',compact('data'));
    }
    public function edit($id){
        $detail = User::find($id);
        return view ('Admin.editSales',['detail'=>$detail]);
    }
    public function update(Request $request,$id){
        $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255'],
            'username' => ['string', 'min:4'],
        ]);

           
            $detail=User::where('role','sales')->find($id);
            $detail->name = $request->input('name');
            $detail->username=$request->input('username');
            $detail->email=$request->input('email');
            $detail->status=$request->input('status')==True ? '1':'0';
            $detail->update();
        
        return redirect('/manage')->with('status','sales profile updated');
    }
    public function destroy($id)
    {
        
        User::find($id)->delete();
        
        return redirect('manage');
    }
  
        
}
