@section('bread') 
            
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">products</li>
            @endsection
@extends('layouts.app')
@section('content')
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">All Categories</h6>
                
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">category</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">created at</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @if($data->count()>0)
                    @foreach($data as $item)
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <h6 class="mb-0 text-sm">{{$item['id']}}</h6>
                                </div>
                        </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="/storage/{{$item->gallery}}" class="avatar avatar-md me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$item['name']}}</h6>
                          </div>
                        </div>
                      </td>
                     
                     
                      <td class="align-middle text-center">
                         <span class="{{ $item->status=='1'?'badge badge-sm bg-gradient-success' : 'badge badge-sm bg-gradient-secondary'}}">{{ $item->status=='1'? 'Active':'hidden'}}</span>
                          </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ date('d M Y - H:i:s', $item->created_at->timestamp) }}</span>
                      </td>
                         <td>
                                    <a href="category/{{$item['id']}}/edit" class="btn btn-sm btn-success btn-flat mx-2"><i class="fa fa-edit"></i> edit</a>
                                    <form action="{{ url('category/'.$item->id)}}" method="post" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-sm btn-danger btn-flat show_confirm d-inline" data-toggle="tooltip" title='Delete'><i class="fa fa-minus"></i> Delete</button>
                                     </form>
                                    
                                    </td>
                    </tr>
                    @endforeach
                   @else
                     <tr>
                        <td colspan="6" class="text-dark h5">no categories added</td>
                    </tr>
                    @endif
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

