@section('title')
My orders
@endsection
@extends('master')
@section("nav")
                <li class="breadcrumb-item active " aria-current="page"><span class="text-dark">My orders<span></li>
      
     @endsection
@section("content")
<div class="py-3 mb-4 shadow-sm bg-dark border-top">
    <div class="container">
        <h5 class="mb-0 text-light"><a href="/" class="text-light">Home </a> <i class="fa fa-angle-right px-2"></i> Order</h5>
    </div>
</div>
<div class="container-fluid" style="margin-top:100px;margin-bottom:100px;">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-striped table-responsive-sm">

        <thead>
          <tr>
            <th>name</th>
            <th>Address</th>
            <th>Status</th>
            <th>detail</th>
          </tr>
        </thead>
        <tbody>
          @foreach($orders as $item)
          <tr>
            <td> {{$item->name}}{{ $item->lname }}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->status}}</td>
            <td><a href="{{ url('view-order/'.$item->id) }}" class="btn btn-primary">view</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection 