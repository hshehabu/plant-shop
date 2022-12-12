<?php 
use App\Http\Controllers\ProductControllerCopy;
$total=0;

  $total= ProductControllerCopy::cartItem();
  
  


?>

<nav class="navbar navbar-expand-lg bg-success navbar-light shadow-sm sticky-top mobile-top-nav">
  <div class="container">
      <img class="img" src="{{asset('debo_logo.png')}}" alt="logo png" >
    
    <button class="navbar-toggler btnnofocus" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars fa-lg text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/shop">Shop</a>
        </li>
        <li class="nav-item">
            <div class="dropdown">
          <a class="nav-link text-white" href="#">Category <i class="fa fa-caret-down"></i></a>
           <div class="dropdown-content" >
                           @foreach($category as $item)
                                                   
                                <a  href="{{url('view-category/'.$item->name)}}" class="nav-2 nav-link text-dark ">{{$item->name}}</a>
                              
                             @endforeach
   
    
                      </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/about-us">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/contact-us">Contact</a>
        </li>
      </ul>
       @if(!Session::has('user'))
    
          <a href="/log" class="nav-2 nav-link h6 text-white"><i class="fa fa-sign-in"></i> Login</a>
     
          <a href="/reg" class="nav-2 nav-link h6 text-white"><img src="{{asset('add-user.png')}}"  style="height:20px;"> Register</a>
     
      @endif
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-sm bg-success sticky-top shadow-sm desktop-top-nav">
   
  <div class="container">
     
      <div class="row">
          <div class="col-8 col-md-5 col-lg-6">
    <a  href="/" class="">
        <img class="navbar-brand img"src="{{asset('debo_logo.png')}}"
          alt="debo logo">
    </a>
    </div>
    
    <div class="col-md-5 col-lg-4 search-mobile pt-1">
        <div class="search">
                          <i class="fa fa-search"></i>
                             <form  class="d-flex" role="search" action="/search-product">
                          <input class="form-control" type="search" placeholder="search for product" aria-label="search" name="query">
                          
                        </div>
         
   </div>
    <div class="col-md-2 col-4 ">
 <div class=" float-end pt-3">
     
       <a href="/cartlist" class="cart-mobile">
               
                <span class="par"> 
              <i class="fa fa-shopping-cart fa-lg text-dark">   
              </i>
                <span class="badge badge-rounded text-dark">{{$total}}</span>
              </span>

            </a>
            
    </button>
 </div>
  </div>
  </div>
  </div>
</nav>
<div class="container mobile-search py-2 bg-light">
    <div class="search-bar-mobile">
             <i class="fa fa-search"></i>
         <form class="d-flex" role="search" action="/search-product">
        <input class="form-control" type="search" placeholder="Search for product" aria-label="Search" name="query">
        </form>
    </div>
   
</div>
<nav class="navbar navbar-expand-sm bg-light navbar-light shadow-sm desktop-top-nav">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-fill w-50">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/shop">Shop</a>
        </li>
        <li class="nav-item">
            <div class="dropdown">
          <a class="nav-link" href="#">Category <i class="fa fa-angle-down"></i></a>
           <div class="dropdown-content" >
                           @foreach($category as $item)
                                                   
                                <a  href="{{url('view-category/'.$item->name)}}" class="nav-2 nav-link text-dark ">{{$item->name}}</a>
                              
                             @endforeach
   
    
                      </div>
                      </div>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/about-us">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/contact-us">Contact us</a>
        </li>
      </ul>
      @if(!Session::has('user'))
    
          <a href="/log" class="nav-2 nav-link text-dark h6"><i class="fa fa-sign-in"></i> Login</a>
     
          <a href="/reg" class="nav-2 nav-link text-dark h6"><img src="{{asset('add-user.png')}}"  style="height:20px;"> Register</a>
     
      @endif
    </div>
  </div>
</nav>

<nav class="navbar fixed-bottom navbar-expand-lg bg-light mobile-nav">
  <div class="container">
            @if(Session::has('user'))
            <div class="btn-group dropup mx-auto py-2 fw-bold nav-2 text-dark">
              <i class="fa fa-user nav-2" data-bs-toggle="dropdown"  aria-expanded="false">
               
              </i>
              <ul class="dropdown-menu">
                <li><a href="/myorders"  class="dropdown-item">የኔ ትእዛዞች</a></li>
                <li><a href="/logout" class="dropdown-item">ውጣ</a></li>
              </ul>
            </div>
           
           @else
            <a href="/log"  class="mx-auto py-2 fw-bold text-dark" ><i class="fa fa-user fa-lg nav-2 "></i></a>
           @endif
           
            <a href="/" class="mx-auto py-2 fw-bold text-dark "> <i class="fa fa-home fa-lg nav-2 "></i></a> 
             <a href="/cartlist" class="mx-auto py-2 fw-bold text-dark "><span class="par"> <i class="fa fa-shopping-cart fa-lg  nav-2"></i>  <span class="badge badge-rounded text-dark ">{{$total}}</span></span></a>
          </div>
    
</nav>
  



