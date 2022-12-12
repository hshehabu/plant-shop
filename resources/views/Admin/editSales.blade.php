@section('bread') 
            
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                <a class="opacity-5 text-dark" href="/manage">manage</a>
            </li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{$detail->name}}</li>
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
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">{{$detail->name}}'s bdetail</h4>
                  
                </div>
              </div>
              <div class="card-body">
                  <form method="post" role="form" class="text-start" action="/update/{{$detail->id}}"
                                            enctype="multipart/form-data">
                                            @csrf
                
                  <div class="input-group input-group-outline my-3">
                    
                    <input type="text " name="name" class="form-control @error('name') is-invalid @enderror" value="{{$detail['name']}}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="input-group input-group-outline my-3">
                    
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{$detail['username']}}">
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="input-group input-group-outline my-3">
                    
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$detail['email']}}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe" name="status" {{ $detail->status=='1'? 'checked':'' }}>
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">status</label>
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
