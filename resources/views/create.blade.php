

@section('bread') 
            
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">add product</li>
            
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
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">add new product</h4>
                  
                </div>
              </div>
              <div class="card-body">
                  <form method="post" role="form" class="text-start"  action="{{ route('create.store') }}"
                                            enctype="multipart/form-data" id="upload-image">
                                            <!-- Add CSRF Token -->
                                            @csrf
                                              <div class="container-fluid">
                                            <div class="row">
                  <div class=" col-6 my-3 form-floating">
                    
                    <input type="text " name="name" class="form-control @error('name') is-invalid @enderror" id="name" autofocus placeholder="Product Name">
                    <label for="name" class="ms-2">Product Name</label>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                   <div class=" my-3 col-6 form-floating">
                 <select name="cate_id" class="form-control" id="cate" required>
                      <option value="" disabled selected>category</option>
                     @foreach($category as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                   @endforeach
                    
                </select>
                 <label for="cate" class="ms-2">Category</label>
                    </div>
                  <div class="form-floating  my-3">
                      
                    <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="desc" placeholder="Description" cols="10" rows="5" ></textarea>
                                                     <label for="desc" class="ms-2">Product description</label>
                                                       @error('description')
                                                       <span class="invalid-feedback" role="alert">
                                                           <strong>{{ $message }}</strong>
                                                       </span>
                                                   @enderror
                  </div> 
                 
                 
                    <div class="form-floating my-3 col-6">
                        <input type="text"  class="form-control @error('original_price') is-invalid @enderror" id="original" name="original_price" min="1" placeholder="original-price">
                        <label for="original" class="ms-2">Original Price</label>
                         @error('original_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                       
                    </div>
                    <div class="form-floating my-3 col-6">
                        <input type="text"  class="form-control @error('selling_price') is-invalid @enderror" id="sell" name="selling_price" min="1" placeholder="selling-price">
                         <label for="sell" class="ms-2">Selling Price</label>
                         @error('selling_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                       
                    </div>
                    <div class="form-floating  my-3 col-6">
                        <input type="text"  class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty" min="1" placeholder="in stock">
                          <label for="qty" class="ms-2">In stock</label>
                         @error('qty')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                       
                    </div>
                      <div class="form-check form-switch d-flex align-items-center mb-3 col-6">
                          
                    <input class="form-check-input" type="checkbox" id="rememberMe" name="status" >
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">status</label>
                  </div>
                      <div class="form-check form-switch d-flex align-items-center mb-3 col-6">
                          
                    <input class="form-check-input" type="checkbox" id="rememberMe" name="trending" >
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">trending</label>
                  </div>
                   <div class="form-floating my-3 col-6">
                    
                    <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" id="img" data-bs-toggle="tooltip" data-bs-placement="right" title="please use images with white bg">
                    <label for="img" class="ms-2">Product Image</label>
                    @error('file')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">submit</button>
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

