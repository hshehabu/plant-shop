<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category= Category::all();
        return view('create',compact('category'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            
            'file' => ['required','image','mimes:png,jpg,jpeg'],
            'name' =>['required','min:4'],
            'description'=>['required','min:10','max:255'],
            'original_price'=>['required'],
            'selling_price'=>['required'],
            'qty'=>['required','numeric'],
            
            
        ]);
        $name = $request->get('name');
        if (Product::where('name', $name)->where('user_id',Auth::id())->exists()) {
            return redirect('/create')->with('status', 'item name already exists');
        } 
        else {
            if ($request->hasFile('file')) {

               


                $path = $request['file']->store('products', 'public');


                $product = new Product([
                    "name" => $request->get('name'),
                    "description" => $request->get('description'),
                    "cate_id" => $request->get('cate_id'),
                    "original_price" => $request->get('original_price'),
                    "selling_price" => $request->get('selling_price'),
                    "user_id" => auth()->user()->id,
                    "gallery" => $path,
                    "status" => $request->input('status') == True ? '1' : '0',
                    "trending" => $request->input('trending') == True ? '1' : '0',
                    "quantity" => $request->input('qty')

                ]);
                $product->save();
            }
            return redirect('/product')->with('status', 'product added successfuly');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = Product::find($id);
        return view('Admin.editProduct', ["detail" => $detail]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            
            'file' => ['image','mimes:png,jpg,jpeg'],
            'name' =>['min:4'],
            'description'=>['min:10','max:255'],
            'original_price'=>['string'],
            'selling_price'=>['string'],
            'qty'=>['numeric'],
            
            
        ]);
        if ($request->has('file')) {
            $detail = Product::find($id);
             $dir= storage_path('app/public/'.$detail->gallery);
             if (File::exists($dir)) {
                File::delete($dir);
             }
            $path = $request['file']->store('products', 'public');
            
            $detail->name = $request->input('name');
            $detail->description = $request->input('description');
            $detail->original_price = $request->input('original_price');
            $detail->selling_price = $request->input('selling_price');
            $detail->status = $request->input('status') == True ? '1' : '0';
            $detail->trending = $request->input('trending') == True ? '1' : '0';
            $detail->quantity = $request->input('qty');
            $detail->gallery = $path;
            $detail->update();
        } else {


            $detail = Product::find($id);
            $detail->name = $request->input('name');
            $detail->description = $request->input('description');
            $detail->original_price = $request->input('original_price');
            $detail->selling_price = $request->input('selling_price');
            $detail->status = $request->input('status') == True ? '1' : '0';
            $detail->trending = $request->input('trending') == True ? '1' : '0';
            $detail->quantity = $request->input('qty');

            $detail->update();
        }
        return redirect('/product')->with('status', 'product updated successfuly');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);        
        $path = storage_path('app/public/'.$product->gallery);
        if(File::exists($path)){
             File::delete($path);
        }
           
            DB::table('orders')
            ->join('order_items', 'order_items.order_id', '=', 'orders.id')->where('order_items.product_id', $id)->update(['visible' => 0]);
            $product->delete();
    
        return redirect('product')->with('status', 'product removed successfully');
    }
}
