@section('bread') 
            
         
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{Auth::user()->name}}'s profile</li>
            @endsection
@extends('layouts.app')
@section('content')
<div class="page-header align-items-start min-vh-100">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">edit profile</h4>
                  
                </div>
              </div>
              <div class="card-body">
                 
                <form method="POST" role="form" class="text-start"  action="{{ route('update') }}" enctype="multipart/form-data">
                                                             @csrf
                  <div class="input-group input-group-outline my-3">
                    
                    <input type="text " class="form-control @error('name') is-invalid @enderror" value="{{Auth::user()->name}}" name="name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                 
                  <div class="input-group input-group-outline my-3">
                    
                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{Auth::user()->email}}" name="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="input-group input-group-outline my-3">
                    
                    <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{Auth::user()->username}}" name="username">
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                     <div class="input-group input-group-outline my-3">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm password">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">update</button>
                  </div>
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
@endsection
{{--
<div class="app-main" id="main">
                <div class="container-fluid">
                        <!-- begin row -->
                            <div class="row">
                                <div class="col-md-6 m-b-30 mx-auto ">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mr-4 pr-4 border-right ">
                                        <h1>{{Auth::user()->name}}'s profbile</h1>
                                    </div>
                                    
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->

                        <!--mail-Compose-contant-start-->
                        <div class="row account-contant">
                            <div class="col-6 mx-auto">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="row no-gutters">
                                            
                                            <div class="col-12">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                        <h5 class="mb-0 py-2">Edit Your Personal Settings</h5>
                                                    </div>
                                                    <div class="p-4">
                                                    <form method="POST" action="{{ route('update') }}">
                                                             @csrf

                            <div class="row ">
                         <div class="col-8 mx-auto mb-4">
                            <label for="name" class="control-label">Name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"   autocomplete="name" autofocus
                                value="{{Auth::user()->name}}"
                                >

                               
                            </div>
                      

                         <div class="col-8 mx-auto mb-4">
                            <label for="email" class="control-label">Email Address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  autocomplete="email"
                                value="{{Auth::user()->email}}"
                                >

                            </div>
              
                            <div class="col-8 mx-auto mb-4">
                                <div class="form-group">
                                <label for="username" class="control-label">username</label>
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username"   autocomplete="username"
                                value="{{Auth::user()->username}}"
                                >

                                </div>
                               
                            </div>
                        
                            <div class="col-8 mx-auto ">
                                <div class="form-group">
                                <label for="password" class="control-label">Password</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                </div>
                           
                            </div>
                            <div class="col-8 mx-auto mb-4">
                                <div class="from-group">
                            <label for="password-confirm" class="control-label">Confirm Password</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">

                                </div>

                            </div>
                    
                            <div class="col-8 mx-auto col-sm-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    update profile
                                </button>
                            </div>
                        </div>
                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--mail-Compose-contant-end-->
                    </div>
</div>
                --}}