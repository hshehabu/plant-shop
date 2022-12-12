@section('bread') 
            
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                <a class="opacity-5 text-dark" href="/earlier">manage</a>
            </li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{$detail->name}}</li>
            @endsection
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
                                                        <h5 class="mb-0 py-2 h2">Edit Sales Detail</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form method="post" action="/update/{{$detail->id}}" enctype="multipart/form-data">
                                                            @csrf
                                                                  
                                                            

                            <div class="row ">
                         <div class="col-8 mx-auto mb-4">
                          
                         <label>Sales Name</label>
                          <input type="text" class="form-control" name="name" value=" {{$detail->name}}" >
                               
                            </div>
     
                         <div class="col-8 mx-auto mb-4">
                           <div class="form-group">
                               <label >User name</label>
                           <input type="text" class="form-control" name="username" value="{{$detail['username']}}" >
                          
                           </div>

                           
                            <div class="col-8  mb-4">
                                <div class="form-group">
                                <label>Email</label>
                               <input type="email" class="form-control" name="email" value="{{$detail['email']}}" >

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