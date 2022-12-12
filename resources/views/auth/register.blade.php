@extends('layouts.app')
@include('layouts.scripts')

@section('content')
<div class="container"> 
    <div class="row no-gutters">
        <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1 mx-auto">
        <div class="d-flex align-items-center h-100-vh">
                 <div class="register p-5">
                   <h1 class="mb-2"> {{ __('Register') }}</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                    <div class="row ">
                         <div class="col-12 mb-4">
                            <label for="name" class="control-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                      

                         <div class="col-12 mb-4">
                            <label for="email" class="control-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
              
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                <label for="username" class="control-label">username</label>
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                               
                            </div>
                        
                            <div class="col-12 ">
                                <div class="form-group">
                                <label for="password" class="control-label">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                        @error('password')
                                   <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                         </span>
                                            @enderror
                                </div>
                           
                            </div>
                            <div class="col-12 mb-4">
                                <div class="from-group">
                            <label for="password-confirm" class="control-label">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">

                                </div>

                            </div>
                    
                            <div class="col-12 col-sm-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            
        </div>
    </div>
</div>
@endsection
