<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class CategoryController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Category::all();
        return view('Admin.categories',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.add-category');
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
            
            'image' => ['required','image','mimes:png,jpg,jpeg'],
            'name' =>['required','min:4'],
            'description'=>['required','min:10','max:255'],
            
            
        ]);
        
        if(Category::where('name',$request->get('name'))->exists()){
            return redirect('Admin.add-category')->with('status','category already exists');
        }
        
        if($request->hasFile('image')){
            $path=$request['image']->store('category','public');
            
                $category =new Category([
                    "name"=>$request->get('name'),
                    "description"=> $request->get('description'),
                    "gallery"=>$path,
                    "status"=>$request->input('status')== True ? '1': '0',
                    "trending"=>$request->input('trending')== True ? '1': '0'
                ]);
                $category->save();
                
        }
        return redirect('category')->with('status','category added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = Category::find($id);
        return view('Admin.edit-category',compact('detail'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $request->validate([
            
            'image' => ['image','mimes:png,jpg,jpeg'],
            'name' =>['min:4'],
            'description'=>['min:10','max:255'],
            
        ]);
         if($request->hasFile('image')){
             $category=Category::find($id);
             $dir = storage_path('app/public/'.$category->gallery);
                if(File::exists($dir)){
                     File::delete($dir);
                }
             $path=$request['image']->store('category','public');
             
           
                 $category->name=$request->input('name');
                 $category->description=$request->input('description');
                 $category->gallery=$path;
                 $category->status=$request->input('status') == True ? '1':'0';
                 $category->trending=$request->input('trending') == True ? '1':'0';
                 $category->update();
         }
         else{
                 $category=Category::find($id);
                 $category->name=$request->input('name');
                 $category->description=$request->input('description');
                 $category->status=$request->input('status') == True ? '1':'0';
                  $category->trending=$request->input('trending') == True ? '1':'0';
                 $category->update();
         }
         return redirect('category')->with('status','category updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $category= Category::find($id);
        $path = storage_path('app/public/'.$category->gallery);
        if(File::exists($path)){
             File::delete($path);
        }
       
        
        $category->delete();
        return redirect('category')->with('status','category deleted successfuly');
    }
}
