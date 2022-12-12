@section('title')
search result
@endsection
@extends('master')

@section("content")
<div class="py-3 mb-4 shadow-sm bg-dark border-top">
    <div class="container">
        <h5 class="mb-0 text-light"><a href="/" class="text-light">Home </a> <i class="fa fa-angle-right px-2"></i>   Search result</h5>
    </div>
</div>
<div class="container mt-2">
  
  <div class="py-4">
    <div class="container">
          
   <div class="row my-4">
       @if($data->count()>0)
          <h4 class="py-4"> Your search result</h4>
        @foreach($data as $item)
        <div class="col-sm-6 col-md-3 mb-4">
              <a href="product/{{ $item['id'] }}">
              <div class="card h-100 pb-4 cust" >
                <div class="card-body text-center">
                <img src="\storage\{{$item['gallery']}} " class="img-fluid" alt="">
                </div>
                <div class="card-text bg-white text-center ">
                  <div class="">
                    <h4 >{{ $item->name }}</h4>
                  </div>
                  <div class="">
                    <p>Br {{ $item->selling_price }}.00</p>
                  </div>
                  
                
                
                  <form name="kilo" action="/add_to_cart" method="POST">
                    @csrf
    
                
                    <input type="hidden" name="cate" value="0">
                    <input type="hidden" name="qnty" value="1">
                    <input type="hidden" name="price" value="{{$item['selling_price']}} ">
                    <input type="hidden" name="name" value="{{ $item['name'] }}">
                    <input type="hidden" name='product_id' value={{$item['id']}}>
                 <button class="btn btn-success " type="submit">ወደ ዘንቢል <i class="fa fa-shopping-cart"></i>
     
                   </form>
                </div>
              </div>
            </a>
        </div>
        @endforeach
        @else
        <h4 class="py-4"> Your search doesn't match any item</h4>
        @endif
      </div>
  </div>
</div>
</div>

@endsection
