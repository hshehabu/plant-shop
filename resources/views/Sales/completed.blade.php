@section('bread') 
            
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Completed</li>
            @endsection
@extends('layouts.app')
@section('content')
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">completed orders</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">customer</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">total payment</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ordered at</th>
                      <th class="text-secondary opacity-7">action</th>
                    </tr>
                  </thead>
                  <tbody>
                     @if($orders->count())
                                @foreach($orders as $item)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$item->name}} {{ $item->lname }}</h6>
                            <p class="text-xs text-secondary mb-0">{{$item->address}}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                       
                        <p class="text-xs text-secondary mb-0">{{$item->total}} birr</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                          <span class="badge  badge-sm bg-gradient-success">{{$item->status}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ date('d M Y - H:i:s', $item->created_at->timestamp) }}</span>
                      </td>
                       <td class="align-middle">
                       <a href="{{ url('view/'.$item->id) }}" class="btn btn-primary">view</a>
                      </td>
                    </tr>
                    @endforeach
                   @else
                     <tr>
                        <td colspan="6" class="text-dark h5">no completed orders here</td>
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

