
@extends('layouts.app')
@include('layouts.scripts')
@section('content')
@include('layouts.sidebar')
<div class="app-main" id="main">
     <div class="container-fluid ">
     <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-lg-flex flex-nowrap align-items-center">
                                    <div class="page-title mr-4 pr-4 border-right ">
                                        <h1>Product Detail</h1>
                                    </div>
                    
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
         <div class="row">
            <div class="col-12 ">
               
                <img src="/storage/{{$detail['gallery']}}" alt="">
                <p class="h2">Product name:  {{$detail['name']}}</p> 
                  <p class="h3">description:  {{$detail['description']}}</p>
                    <p class="h3">category:  {{$detail['category']}}</p>
                      <p class="h3">Price: {{$detail['price']}} ETB</p>
                
                </div>
            </div>
         </div>
     </div>
         
  
@endsection
