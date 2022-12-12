@extends('master')
@section("content")

<div class="container">

      <div class="trending-wrapper col-sm-6 col-md-6">
        <h3>Products</h3>
        @foreach($product as $item)
        <div class="trening-item">
          <a href="product/{{$item['id']}}">
          <img class="trending-image" src="{{$item['gallary']}}">
          <div class="">
            <h3>{{$item['name']}}</h3>
            <h4>{{$item['description']}}</h4>
            <h3 id='price'>ዋጋ፡ {{$item['price']}}</h3>
          </a>
          
            <form name="kilo" action="/add_to_cart" method="POST">
            <p>ብዛት፡ <input type="number" min="1" name="qnty" value="kilo"></p> 
            @csrf
            <input type="hidden" name='product_id' value={{$item['id']}}>
        <button class="btn btn-md  btn-primary">ግዛ</button>
        </form>
        <br><br>
          </div>
        
        </div>
        @endforeach
      </div>
      
@endsection
<script>
   var languge ={
        amaharic: {
            pric፡ 'ዋጋ';
        },
        oromifa: {
            pric፡'Qersh';
        }
    }
    if(window.location.hash){
        if (window.location.hash === '#oromifa') {
            price.textContent = languge.oromifa.pric;
        }
        else{
            price.textContent = languge.amaharic.price;
        }
    }
</script>