@extends('layouts.app')
@include('layouts.scripts')
@section('content')
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 light:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        
                    @endauth
                </div>
            @endif

            <div class="card text-center">
                    <div class="card-header ">
                       <p class="h2"><b>Bishishe Admin Dashboard</b> </p> 
                    </div>
                 <div class="card-body">
                   
                   <p class="card-text ">A National Online Ecommerce Website</p>
                    <a href="/login" class="btn btn-primary">Login</a>
                </div>
  
            </div>
            
   </div>
  
    </body>
@endsection
