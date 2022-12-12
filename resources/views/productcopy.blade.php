
@section('title')
Debo | Agricultural input and seedling
@endsection
@extends('master')

@section("content")
@if (session('limit'))
<div class="alert alert-success">
    {{ session('limit') }}
    <a href="/ordernow" class="btn btn-success">አሁን እዘዝ</a>
</div>
@endif

      <div class="">
        <img src="{{asset('debo1.jpg')}}" class="d-block w-100" style="max-height: 600px;min-height:300px;" alt="First slide">
      </div>
 
<div class="container mt-2">
  
  <div class="py-4">
    <div class="container-fluid">
          
    @if($cate->count()>0)
    <h4 class="py-4">Trending category</h4>
        <div class="row my-4 bg-light">
          <div class="owl-carousel owl-theme">
              @foreach($cate as $item)
              <a href="/view-category/{{$item->name}}">
              <div class="item bg-light py-2 clearfix">
                  <img src="\storage\{{$item['gallery']}} " style="border-radius:10px;" alt="{{ $item->name }}">
                  <div  style="position:relative;">
                       <h6 class="fw-bold text-dark mx-auto" style="  left:50%;top:50%;">{{ $item->name }}</h6>
                  </div>
                 
                  </div>
                     
                   </a> 
                    @endforeach
                 </div>
            </div>
                               
            
        @endif
       
   
            
        @if($featured->count()>0)
         <h4 class="py-4">Trending products</h4>
        <div class="row my-4 bg-light">
           
            <div class="owl-carousel owl-theme ">
    
          @foreach($featured as $item)
        <a href="product/{{$item['id']}}">
            <div class="item bg-light py-2 ">
         
            
                <img src="\storage\{{$item['gallery']}}" style="border-radius:5px;" alt="{{ $item->name }}">
                 
                <h6 class="fw-bold text-dark mx-auto">{{ $item->name }}</h6>
                   
                 
                    <span class="fw-bold text-dark mx-auto" >{{ $item->selling_price }}.00 ብር</span>
                  
                 
                  </div>
             
          </a>
        
            @endforeach
            </div>
             </div>
          
         @endif    
         @if($product->count()>0)
      <div class="row my-4">
          <h4 class="py-4"> products</h4>
        @foreach($product as $item)
        <div class="col-sm-6 col-md-3 mb-4">
              <a href="product/{{$item['id']}}">
              <div class="card h-100 pb-4 cust" >
                <div class="card-body text-center">
                <img src="\storage\{{$item['gallery']}} " class="img-fluid" alt="">
                </div>
                <div class="card-text bg-white text-center ">
                  <div class="">
                    <h4 >{{ $item->name }}</h4>
                  </div>
                  <div class="">
                    <p class="fw-bold text-dark">{{ $item->selling_price }}.00 ብር</p>
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
      </div>
       @endif    
    </div>
  </div>
</div>

@endsection
@section('scripts')
<script>
$('.owl-carousel').owlCarousel({
   
    loop:true,
    margin:10,
     center: true,
    slideSpeed: 200,
    singleItem: true,
    autoplay: true,
    autoplaySpeed: 1000,
    nav:false,
     dots:false,
  rewind: true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        800:{
            items: 2
        },
        1000:{
            items:2
        },
      1200:{
          items: 3
      }
    }
});

</script>
@endsection