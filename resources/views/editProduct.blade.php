@extends('layouts.app')
@include('layouts.scripts')
@section('content')
@include('layouts.sidebar')

<div class="app-main" id="main">
    <div class="container-fluid">
    <div class="row account-contant">
                            <div class="col-6 mx-auto">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="row no-gutters">
                                            
                                            <div class="col-12">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                        <h5 class="mb-0 py-2 h2">Edit Product Detail</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form method="post" action="/update/{{$detail->id}}" enctype="multipart/form-data">
                                                            @csrf
                                                                  
                                                            

                            <div class="row ">
                         <div class="col-8 mx-auto mb-4">
                          
                         <label>Product Name</label>
                          <input type="text" class="form-control" name="name" value=" {{$detail->name}}" >
                               
                            </div>
                           




                         <div class="col-8 mx-auto mb-4">
                           <div class="form-group">
                           <label > Description</label>
                             <textarea name="description" class="form-control" cols="10" rows="5"  >
       {{$detail->description}}
                                 </textarea>
                           </div>

                            </div>
              
                            <div class="col-8 mx-auto mb-4">
                                <div class="form-group">
                                <label>Category</label>
                                 <select name="category" class="form-control"  placeholder="{{$detail['category']}}">
                                <option value="Vegetable">Vegetable</option>
                                <option value="Fruit">Fruit</option>
                                <option value="Spice">Spice</option>
             
                               </select>
                                

                                </div>
                               
                            </div>
                        
                            <div class="col-8 mx-auto ">
                                <div class="form-group">
                                <label>Price</label>
                               <input type="number" class="form-control" name="price" value="{{$detail['price']}}" >

                                </div>
                           
                            </div>
                        <div class="col-8 mx-auto">
                            <div class="form-group">
                            <input type="file" name="file" placeholder="/storage/{{$detail['gallery']}}">
                            </div>
                      
                        </div>
                        
                            <div class="col-8 mx-auto col-sm-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    update 
                                </button>
                            </div>
                        </div>
                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
                  
    </div>
@endsection