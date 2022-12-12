@section('bread') 
            
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                <a class="opacity-5 text-dark" href="/orders">orders</a>
            </li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{ $orders->name }}</li>
            @endsection
@extends('layouts.app')
@section('content')
@include('layouts.sidebar')


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">view order</h4>
                  
                </div>
              </div>


                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-dark ">

                                <div class="h2 font-weight-bold ">Shipping details</div>
                                <hr>
                                <label for="">first name</label>
                                <h6 class="border">{{ $orders->name }}</h6>
                                <label for="">last name</label>
                                <h6 class="border">{{ $orders->lname }}</h6>
                                <label for="">shipping address</label>
                                <h6 class="border">{{ $orders->address }}</h6>
                                <label for="">Contact No.</label>
                                <h6 class="border">{{ $orders->phone }}</h6>
                                <label for="">Status</label>
                                <h6 class="border">{{ $orders->status }}</h6>
                                <label for="">Ordered at</label>
                                <h6 class="border">{{ date('d M Y - H:i:s', $orders->created_at->timestamp) }}</h6>

                            </div>
                            <div class="col-md-6 ">
                                <div class="h2 font-weight-bold text-dark">Order details</div>
                                  <div class="table-responsive p-0">
                                <table class="table table-bordered align-items-center text-dark">
                                    <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>quantity</th>
                                            <th>price</th>
                                            <th>image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->orderitems as $item)
                                        <tr>
                                            <td>{{ $item->products->name ?? 'item deleted'}}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>
                                                <img src="/storage/{{ $item->products->gallery ?? ''}}"
                                                    alt="{{ $item->products->name ?? 'deleted'}} image" height="70px" width="70px">
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                                <p class="h4 text-dark px-2">Total Price: {{ $orders->total }} Birr</p>
                                <div class="mt-5 mx-auto">
                                    <label for="" class="text-dark ">Order status</label>
                                    <form action="{{ url('update-order/'.$orders->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                    <select class="form-select" name="status">
                                        <option {{ $orders->status=='pending'? 'selected':'' }} value="0">pending</option>
                                        <option {{ $orders->status=='completed'? 'selected':'' }} value="1">completed</option>
                                    </select>
                                    <div class="mt-4">
                                        <label for="" class="text-dark ">visible to users</label>
                                        <input type="checkbox" name="visible" {{ $orders->visible=='1'? 'checked':'' }}> 
                                        
                                    </div>
                                    <button class="btn btn-success float-right" type="submit">update</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{--
            <form action="{{url('delivered/'.$item->id)}}" method="post">
                @csrf
                <button type="submit" class="btn btn-warning">delivered</button>
            </form> --}}






        </div>

    </div>

@endsection