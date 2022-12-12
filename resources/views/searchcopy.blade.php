@section('title')
{{$data->name}}
@endsection
@extends('master')

@section("content")

<div class="container mt-2">
  
  <div class="py-4">
    <div class="container">
          
    @if($data->count()>0)
    <h4 class="py-4">Your search result</h4>
        <div class="row my-4 bg-light">
            @foreach($data as $items)
            <a href="product/{{ $item['id'] }}" >
              <div class="card cust" >
                <div class="card-text">
                <img src="\storage\{{$item['gallery']}} "  alt="{{ $item->name }}">
                </div>
                <div class="card-body">
                
                    <h4>{{ $item->name }}</h4>
                   <p>
                       {{ $item->description }}
                   </p>
                   
                </div>
              </div>
            </a>
            @endforeach
         </div>
     @else
     <h4 class="py-4">Your search does't match any items</h4>
     @endif
  </div>
</div>
</div>

@endsection
