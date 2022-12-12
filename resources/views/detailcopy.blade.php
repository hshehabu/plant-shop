
@section('title')
{{$product->name}}
@endsection
@extends("master")

@section("content")
<div class="py-3 mb-4 shadow-sm bg-dark border-top">
    <div class="container">
        <h5 class="mb-0 text-light"><a href="/" class="text-light">Home </a> <i class="fa fa-angle-right px-2"></i>   {{$product['name']}}</h5>
    </div>
</div>

<div class="container-fluid" style="margin-bottom: 100px;margin-top:50px;">
    <div class="row">
        <div class="col-md-9 mx-auto">
             <div class="card shadow">
        <div class="card-body">
            <div class="row product-data">
                <div class="col-md-4 border-right">
                    <img src="\storage\{{$product['gallery']}}" alt="{{$product['name']}}" class="w-50"
                    style="height:200px;">
                </div>
                <div class="col-md-8 ">
                    <h2 class="mb-0">
                        {{ $product->name }}
                    </h2>
                    <hr>
                    <label><h4>ዋጋ : {{ $product->selling_price }} ብር</h4></label>
                    
                        <h5>{{ $product->description }}</h5>
                    
                    <hr>
                    @if ($product->quantity > 0)
                        <label class="badge bg-success">ክምችት አለ</label>
                        @else
                        <label class="badge bg-danger">ክምችት አልቋል</label>
                    @endif
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <form name="kilo" action="/add_to_cart" method="POST">
                                @csrf
                                <label for="qnty">ብዛት</label>
                                <div class="input-group text-center mb-3" style="width:130px;">
                                    <button class="input-group-text dec-btn ">-</button>
                                    <input type="number" min="1" max="25" name="qnty" value="1"
                                        class="form-control text-center qty-input" >
                                    <button class="input-group-text inc-btn ">+</button>
                
                                </div>
                        </div>
                                <input type="hidden" name="cate" value="0">
                                <input type="hidden" name="price" value="{{$product['selling_price']}} ">
                                <input type="hidden" name="name" value="{{ $product['name'] }}">
                                <input type="hidden" name='product_id' value={{$product['id']}}>
                              @if ($product->quantity>0)
                              <div style="display: flex; flex-direction: column; display:inline;">
                                <button class="btn btn-success " type="submit" style="align-self: flex-start">
                                    ወደ ዘንቢል <i class="fa fa-shopping-cart"></i>
                                </button>
                              </div>
                              @endif
                               
                               

                                
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

@endsection