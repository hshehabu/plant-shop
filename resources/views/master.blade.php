<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <link rel="stylesheet"  href="{{asset('css/custom.css')}}" />
    <script src="{{asset('assets/js/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <link rel="stylesheet"  href="{{asset('css/bootstrap5.css')}}" />
   
    <link rel="stylesheet" type="text/css" href="{{asset('style2.css')}}" />
    <script src="https://kit.fontawesome.com/2f4b5409be.js" crossorigin="anonymous"></script>
      <link  href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
      <link  href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <!-- custom app -->
   
    
</head>

<body>

   
    {{View::make('header')}}
    
    @yield('content')
    {{View::make('footer')}}
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
 <script src="{{asset('assets/js/jquery/jquery-3.6.0.min.js')}}"></script>
 <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
 <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
@if (session('status'))
<script>
  swal("{{ session('status') }}");
</script>
    
 
 @endif

   @yield('scripts')
<!--     <div id="preloader"></div>-->
<!--<script>-->
<!--     const preloader = document.querySelector('#preloader');-->
<!--    if (preloader) {-->
<!--        window.addEventListener('load', () => {-->
<!--            preloader.remove();-->
<!--        });-->
<!--    }-->

<!--</script>-->

</body>
<style>
/*#preloader {*/
/*    position: fixed;*/
/*    inset: 0;*/
/*    z-index: 9999;*/
/*    overflow: hidden;*/
/*    background: #fff;*/
/*    transition: all 0.6s ease-out;*/
/*    width: 100%;*/
/*    height: 100vh;*/
/*}*/

/*#preloader:before,*/
/*#preloader:after {*/
/*    content: "";*/
/*    position: absolute;*/
/*    border: 4px solid green;*/
/*    border-radius: 50%;*/
/*    -webkit-animation: animate-preloader 2s cubic-bezier(0, 0.2, 0.8, 1) infinite;*/
/*    animation: animate-preloader 2s cubic-bezier(0, 0.2, 0.8, 1) infinite;*/
/*}*/

/*#preloader:after {*/
/*    -webkit-animation-delay: -0.5s;*/
/*    animation-delay: -0.5s;*/
/*}*/

/*@-webkit-keyframes animate-preloader {*/
/*    0% {*/
/*        width: 10px;*/
/*        height: 10px;*/
/*        top: calc(50% - 5px);*/
/*        left: calc(50% - 5px);*/
/*        opacity: 1;*/
/*    }*/
/*    100% {*/
/*        width: 72px;*/
/*        height: 72px;*/
/*        top: calc(50% - 36px);*/
/*        left: calc(50% - 36px);*/
/*        opacity: 0;*/
/*    }*/
/*}*/

/*@keyframes animate-preloader {*/
/*    0% {*/
/*        width: 10px;*/
/*        height: 10px;*/
/*        top: calc(50% - 5px);*/
/*        left: calc(50% - 5px);*/
/*        opacity: 1;*/
/*    }*/
/*    100% {*/
/*        width: 72px;*/
/*        height: 72px;*/
/*        top: calc(50% - 36px);*/
/*        left: calc(50% - 36px);*/
/*        opacity: 0;*/
/*    }*/
/*}*/

.btnnofocus:focus {
  outline: none;
  box-shadow: none;
}
      
.search-bar-mobile{
    position:relative;
    
}
.search-bar-mobile input{
    text-indent:8%;
    border-radius:20px;
}
.search-bar-mobile .fa-search{
    position:absolute;
    top:20%;
    left:5%;
}

       .search{
       position: relative;
       box-shadow: 0 0 40px rgba(51, 51, 51, .1);
         
       }

       .search input{

        height: 50px;
        text-indent: 25px;
       


       }



       .search .fa-search{

        position: absolute;
        top: 20px;
        left: 16px;

       }

       .search button{

        position: absolute;
        top: 5px;
        right: 5px;
        height: 40px;

       }

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}
.dropdown:hover .dropdown-content {display: block;}
.item {

  padding: 5px;
  text-align: center;
  
  margin: 5px;
}

.mobile-nav{
    display:none;!important
}
.mobile-search{
    display:none;!important
}
.mobile-top-nav{
    display:none;!important
}
 @media only screen and (max-width: 768px) {
  
  .img{
    width: 70%;
    height:100%;
  }
  .search-mobile{
      display:none;
  }
  .mobile-search{
      display:block;!important
      
  }
  .cart-mobile{
      display:none;
  }
  .mobile-nav{
    display:block;
}
.desktop-top-nav{
    display:none;
}
.mobile-top-nav{
    display:block;!important
}
} 
 @media only screen and (max-width: 992px) {
  .img{
    width: 70%;
    height:100%;
  }

} 
</style>
</html>