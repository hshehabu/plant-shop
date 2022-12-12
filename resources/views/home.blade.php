@extends('layouts.app')
@section('content')
@include('layouts.sidebar')
<div class="app-main" id="main">
                    <!-- begin container-fluid -->
                     <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-lg-flex flex-nowrap align-items-center">
                                    <div class="page-title mr-4 pr-4 border-right ">
                                        <h1>Dashboard</h1>
                                    </div>
                    
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                      @if(Auth::user()->role=='admin')
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card card-statistics">
                                    <div class="row no-gutters">
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-lg-right border-bottom border-xxl-bottom-0">
                                                <div class="d-flex m-b-10">
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Total
                                                        Posts</p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i
                                                            class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="">
                                                        <div id="analytics7"></div>
                                                    </div>
                                                    <div
                                                        class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                       
                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle"></i> {{$data}}
                                                        </h3>
                                                        <p>Products posted</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-xxl-right border-bottom border-xxl-bottom-0">
                                                <div class="d-flex m-b-10">
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Total Users
                                                    </p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i
                                                            class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics8"></div>
                                                    </div>
                                                    <div
                                                        class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle"></i>{{$person}}
                                                        </h3>
                                                        <p>This month</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-lg-right border-bottom border-lg-bottom-0">
                                                <div class="d-flex m-b-10">
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">No of Sales
                                                    </p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i
                                                            class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics9"></div>
                                                    </div>
                                                    <div
                                                        class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle"></i>{{$sales}}</h3>
                                                        <p>Sales</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20">
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics10"></div>
                                                    </div>
                                                    <div class="statistics ml-sm-auto mt-4 mt-sm-0 pr-sm-5">
                                                        <ul class="list-style-none p-0">
                                                            <li class="d-flex py-1">
                                                                <span><i class="fa fa-circle text-primary pr-2"></i>
                                                                    Redirect Visits</span> <span
                                                                    class="pl-2 font-weight-bold">456</span>
                                                            </li>
                                                            <li class="d-flex py-1"><span><i
                                                                        class="fa fa-circle text-warning pr-2"></i> New
                                                                    Visits</span> <span
                                                                    class="pl-2 font-weight-bold">256</span></li>
                                                            <li class="d-flex py-1"><span><i
                                                                        class="fa fa-circle text-info pr-2"></i> Direct
                                                                    Visits</span> <span
                                                                    class="pl-2 font-weight-bold">128</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif



                        <!-- end row -->
                        <!-- event Modal -->
                        <div class="modal fade" id="eventModal" tabindex="-1" role="dialog"
                            aria-labelledby="verticalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="verticalCenterTitle">Add New Event</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="modelemail">Event Name</label>
                                                <input type="email" class="form-control" id="modelemail">
                                            </div>
                                            <div class="form-group">
                                                <label>Choose Event Color</label>
                                                <select class="form-control">
                                                    <option>Primary</option>
                                                    <option>Warning</option>
                                                    <option>Success</option>
                                                    <option>Danger</option>
                                                </select>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-8 m-b-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <div class="card-heading">
                                            <h4 class="card-title">Top selling products</h4>
                                        </div>
                                    </div>
                                    <div class="card-body scrollbar scroll_dark pt-0" style="max-height: 350px;">
                                        <div class="datatable-wrapper table-responsive">
                                            <table id="datatable" class="table table-borderless table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Price</th>
                                                        <th>Status</th>
                                                        <th>Payment Method</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($product as $item)
                                                
                                                    <tr>
                                                       
                                                        <td>{{$item->id}}</td>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->price}}</td>
                                                        <td>
                                                        {{$item->payment_status}}

                                                        </td>
                                                      
                                                        <td> 
                                                        {{$item->payment_method}}
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


                    <!-- end row -->
                </div>
@endsection
@section('contents')  
                                        
                    <form action="/search" class="navbar-form ">
                            <input type="text" name="query" placeholder="Search item"  style="width: 300px;">
                            <button type="submit" class="btn btn-primary ">Search</button>
                        </form>
                       </li>

                           @endsection