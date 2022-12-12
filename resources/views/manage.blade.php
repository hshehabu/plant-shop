           @section('bread') 
            
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">manage</li>
            @endsection
@extends('layouts.app')
@section('content')
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">manage sellers</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Seller</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($manage as $sales)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$sales['name']}}</h6>
                            <p class="text-xs text-secondary mb-0">{{$sales['email']}}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Admin</p>
                        <p class="text-xs text-secondary mb-0">{{$sales['role']}}</p> 
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="{{ $sales->status=='1'?'badge badge-sm bg-gradient-success' : 'badge badge-sm bg-gradient-secondary'}}">{{ $sales->status=='1'? 'Active':'suspended'}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ date('d M Y - H:i:s', $sales->created_at->timestamp) }}</span>
                      </td>
                       <td class="align-middle">
                         <a href="edit/{{$sales['id']}}" class="btn btn-sm btn-success btn-flat mx-2"><i class="fa fa-edit"></i> edit</a>
                                        <form action="{{ url('remove/'.$sales->id)}}" method="post" class="d-inline">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-sm btn-danger btn-flat show_confirm_sales d-inline" data-toggle="tooltip" title='Delete'><i class="fa fa-minus"></i>Fire</button>
                                         </form>
                      </td>
                    </tr>
                    @endforeach
                   
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        @endsection
<!--<div class="app-main" id="main">-->

<!--    <div class="container-fluid">-->

<!--        <div class="row">-->
<!--            <div class="col-md-12 m-b-30">-->
<!--                <div class="card">-->
<!--                    <div class="card-header bg-primary">-->
<!--                        <h4 class="h2 d-inline text-white">Bishishe Sellers</h4>-->

<!--                    </div>-->

<!--                    <div class="card-body">-->
<!--                        <table class="table">-->
<!--                            <thead>-->
<!--                                <tr>-->
<!--                                    <th>#</th>-->
<!--                                    <th>name</th>-->
<!--                                    <th>username</th>-->
<!--                                    <th>email</th>-->
<!--                                    <th>hired at</th>-->
<!--                                    <th>status</th>-->
<!--                                    <th>action</th>-->
<!--                                </tr>-->
<!--                            </thead>-->
<!--                            <tbody>-->
<!--                                @foreach($manage as $sales)-->
<!--                                <tr>-->
<!--                                    <td>{{ $sales['id'] }}</td>-->
<!--                                    <td>{{$sales['name']}}</td>-->
<!--                                    <td> {{$sales['username']}}</td>-->
<!--                                    <td>{{$sales['email']}}</td>-->
<!--                                    <td>{{ date('d M Y - H:i:s', $sales->created_at->timestamp) }}</td>-->
                                    
<!--                                    <td><span class="{{ $sales->status=='1'?'badge badge-success-inverse' : 'badge badge-danger-inverse'}}">{{ $sales->status=='1'? 'Active':'suspended'}}</span></td>-->
<!--                                    <td>-->
                                       
                                        
<!--                                        </td>-->
<!--                                </tr>-->
<!--                                @endforeach-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->









<!--        </div>-->

<!--    </div>-->
<!--</div>-->


