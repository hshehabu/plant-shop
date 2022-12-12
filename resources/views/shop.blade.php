@section('title')
Products
@endsection
@extends('master')

@section("content")
<div class="py-3 mb-4 shadow-sm bg-dark border-top">
    <div class="container">
        <h5 class="mb-0 text-light"><a href="/" class="text-light">Home </a> <i class="fa fa-angle-right px-2"></i> Shop</h5>
    </div>
</div>

<div class="container my-4">
    <div class="row">
        @foreach($category as $item)
        
        <div class="col-md-4 col-sm-6 py-4">
            <a href="view-category/{{$item->name}}">
        <div class="card cust">
            <div class="card-body text-center">
                <img src="/storage/{{$item->gallery}}" alt="{{$item->name}} image">
                
            </div>
            <div class="card-text py-2 text-center">
                <h6 class="fw-bold">{{$item->name}}</h6>
            </div>
        </div>
         </a>
        </div>
       
        @endforeach
    </div>
</div>
@endsection