@section('bread') 
            
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                <a class="opacity-5 text-dark" href="/product">products</a>
            </li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{$detail->name}}</li>
            @endsection
@extends('layouts.app')
@section('content')
 <div class="page-header">
   <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container-fluid py-4">
        
        <div class="row">
          <div class=" col-12 mx-auto">
            <div class="card my-4">
               <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">edit product</h4>
                  
                </div>
              </div>
              <div class="card-body">
                <form method="POST" role="form" class="text-start" action="/update_item/{{$detail->id}}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="container-fluid">
                                            <div class="row">
                 <div class=" col-6 my-3 form-floating">
                    
                    <input type="text " name="name" class="form-control @error('name') is-invalid @enderror" id="name" autofocus placeholder="Product Name" value="{{$detail['name']}}">
                    <label for="name">Product Name</label>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                   <div class="my-3  form-floating col-6">
                 <select  class="form-control" id="cate">
                     
                    <option value="" >{{$detail->category->name}}</option>
                   
                   
                </select>
                  <label for="cate">Category</label>
                    </div>
                  <div class="form-floating  my-3">
                      
                    <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="desc" placeholder="Description" cols="10" rows="5"  >{{$detail['description']}}</textarea>
                         <label for="desc">Product description</label>
                           @error('description')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                  </div> 
                 
                 
                    <div class="form-floating my-3 col-6">
                        <input type="text"  class="form-control @error('original_price') is-invalid @enderror" id="original" placeholder="original" name="original_price" min="1" value="{{$detail['original_price']}}">
                        <label for="original">Original Price</label>
                         @error('original_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      
                    </div>
                    <div class="form-floating my-3 col-6">
                        <input type="text"  class="form-control @error('selling_price') is-invalid @enderror" id="sell" placeholder="selling" name="selling_price" min="1" value="{{$detail['selling_price']}}">
                        <label for="sell" >selling_price</label>
                         @error('selling_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                       
                    </div>
                    <div class="form-floating my-3  col-6">
                        <input type="text"  class="form-control @error('qty') is-invalid @enderror" name="qty" id="qty" placeholder="quantity" min="1" value="{{ $detail['quantity'] }}">
                        <label for="qty" >in-stock</label>
                         @error('qty')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                       
                    </div>
                      <div class="form-check form-switch d-flex align-items-center my-3 col-6">
                          
                        <input class="form-check-input" type="checkbox" id="rememberMe" name="status" {{ $detail->status=='1'? 'checked':'' }}>
                        <label class="form-check-label mb-0 ms-3" for="rememberMe">status</label>
                     </div>
                      <div class="form-check form-switch d-flex align-items-center my-3 col-6">
                          
                        <input class="form-check-input" type="checkbox" id="rememberMe" name="trending" {{ $detail->trending=='1'? 'checked':'' }}>
                        <label class="form-check-label mb-0 ms-3" for="rememberMe">trending</label>
                     </div>
                   <div class="form-floating my-3  col-6">
                    
                    <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" id="img" data-bs-toggle="tooltip" data-bs-placement="right" title="please use images with white bg">
                    <label for="img">Product Image</label>
                    @error('file')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">update</button>
                  </div>
                 </div>
                                            </div>
                </form>
               </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      

@endsection


