@extends('layouts.app')
@extends('layouts.scripts')
@section("content")
<div class="container">
    <div class="row no-gutters">
        <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1 mx-auto">
            <div class="d-flex align-items-center h-100-vh">
            <div class="login p-50">
   
              <form method="post" action="log"  >
                   @csrf
                  <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                  
                             <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                    </div>
                

                  
                 <div class="col-12">
                      <div class="form-group">
                             <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                     <button type="submit" class="btn btn-primary">Login</button>
                 </div>
                      
                  </div>
                </form>
        </div>
      </div>
    </div>
</div>
@endsection
