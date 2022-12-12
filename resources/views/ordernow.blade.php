@section('title')
Checkout
@endsection
@extends('master')

@section("content")
<div class="py-3 mb-4 shadow-sm bg-dark border-top">
    <div class="container">
        <h5 class="mb-0 text-light"><a href="/" class="text-light">Home </a> <i class="fa fa-angle-right px-2"></i> <a href="/cartlist" class="text-light">Cart</a> <i class="fa fa-angle-right px-2"></i> Order</h5>
    </div>
</div>
@php
            $totals = 0;
            
            @endphp
<div class="container-fluid" style="margin-top:100px;margin-bottom:100px;">
  <div class="row">
    <div class="col-lg-7">
      <div class="card">
        <div class="card-body">
          <h4>Fill out form</h4>
          <hr>
          <form action="/orderplace" method="POST" >
            @csrf
          <div class="row checkout-form">

            <div class="col-12 form-group required">
              <label for="" class="control-label">First name</label>
              <input type="text" name="fname" class="form-control" required="required">
            </div>
            <div class="col-12 form-group required">
              <label for="" class="control-label">Last name</label>
              <input type="text" name="lname" class="form-control" required="required">
            </div>
            <div class="col-12 form-group required">
              <label for="" class="control-label">Phone number</label>
              @if(Auth::check())
              @foreach ($person as $item)
               
              <input type="tel" name="phone" class="form-control"  required="required" value="{{ $item->phone }}">
              @endforeach
              @else
               <input type="tel" name="phone" class="form-control"  required="required">
              @endif
            </div>
            <div class="col-12 form-group required">
              <label for="" class="control-label">Delivery address</label>
              <select name="address"  class="form-control" id="address" onchange="delivery()"  required>
                  <option value="" disabled selected>Select delivery address</option>
                  <option value="kito" >kito</option>
                  <option value="hirmata">hirmata</option>
                  <option value="ginjo" >ginjo</option>
              </select>
            
            </div>
            
          </div>
        </div>
        
      </div>
    </div>
    <div class="col-lg-5">
      <div class="card">
        <div class="card-body">
          <h4>order details</h4>
          <hr>
          <table class="table">
            
            <tbody>
              @foreach($total as $items)
              <tr>
                <td>{{$items['name']}}</td>
                <td>{{$items['price']}} ብር</td>
                <td>x {{$items['quantity']}}</td>
                @php
                $totals += $items['price']*$items['quantity'];
                  
                @endphp
              
               
              </tr>
              
              @endforeach
              <input type="hidden" id="price" value="{{ $totals }}">

              <tr>
              <td>
                <h6 class="text-dark">ድምር: {{ $totals }}</h6 >
               <h6 class="text-dark">ማድረሻ: <span id="delivery"></span></h6>
                </td>

              </tr>
            </tbody>
          </table>
      
        </div>
        <div class="card-footer">
          <input type="hidden" name="post_price" id="post_price">
            
              
              @php
                if (!$totals){
               echo ' <p><i class="fa fa-shopping-cart"></i> no item in the cart</p>';
              }
               else {
                echo '<span class="h5 text-dark">አጠቃላይ ዋጋ: <span id="total_price">' .$totals.' </span> Br</span>';
                echo '<button type="submit" class="btn btn-success float-right">አሁን ይዘዙ</button>';
               }
              @endphp
             
              
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection 