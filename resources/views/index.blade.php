@extends('layouts.index')
@section('title')
Dashboard - Home
@endsection
@section('content')
        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Dashboard</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->


                    <div class="col-xl-12">
	                    <div class="row">
	                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
	                            <div class="card-box noradius noborder bg-danger">
	                                <i class="far fa-user float-right text-white"></i>
	                                <h6 class="text-white text-uppercase m-b-20">Users</h6>
	                                {{-- <h1 class="m-b-20 text-white counter">{{$user->count('id_user')}}</h1> --}}
	                                <h1 class="m-b-20 text-white counter">8</h1>
	                                <span class="text-white">Registered</span>
	                            </div>
	                        </div>

	                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
	                            <div class="card-box noradius noborder bg-warning">
	                                <i class="fas fa-shopping-cart float-right text-white"></i>
	                                <h6 class="text-white text-uppercase m-b-20">Orders</h6>
	                                {{-- <h1 class="m-b-20 text-white counter">{{$order->count('id_order')}}</h1> --}}
	                                <h1 class="m-b-20 text-white counter">8</h1>
	                                <span class="text-white">Today</span>
	                            </div>
	                        </div>
{{-- 
	                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
	                            <div class="card-box noradius noborder bg-info">
	                                <i class="far fa-calendar-alt float-right text-white"></i>
	                                <h6 class="text-white text-uppercase m-b-20">Booking</h6>
	                                <h1 class="m-b-20 text-white counter">58</h1>
	                                <span class="text-white">Today</span>
	                            </div>
	                        </div> --}}

	                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
	                            <div class="card-box noradius noborder bg-purple">
	                                <i class="fas fa-money-bill-wave float-right text-white"></i>
	                                <h6 class="text-white text-uppercase m-b-20">Income</h6>
	                                {{-- <h1 class="m-b-12 text-white counter">{{$transaksi->sum('harga')}}</h1> --}}
	                                <h1 class="m-b-20 text-white counter">8</h1>
	                                <span class="text-white">Today</span>
	                            </div>
	                        </div>
	                    </div>
                    </div>
                    <!-- end row -->
{{-- 
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-user-friends"></i> Users details</h3>
                                </div>

                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Extn.</th>
                                                    <th>Date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <!-- end table-responsive-->

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div> --}}

                    </div>
                    <!-- end row-->

                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->
@endsection 
