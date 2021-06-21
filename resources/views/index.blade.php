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
	                                <h1 class="m-b-20 text-white counter">{{$user->count('id')}}</h1>
	                                <span class="text-white">Registered</span>
	                            </div>
	                        </div>

	                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
	                            <div class="card-box noradius noborder bg-warning">
	                                <i class="fas fa-shopping-cart float-right text-white"></i>
	                                <h6 class="text-white text-uppercase m-b-20">Sewa</h6>
	                                <h1 class="m-b-20 text-white counter">{{$order->count('id_sewa')}}</h1> 
	                                <span class="text-white">Today</span>
	                            </div>
	                        </div>

	                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
	                            <div class="card-box noradius noborder bg-purple">
	                                <i class="fas fa-money-bill-wave float-right text-white"></i>
	                                <h6 class="text-white text-uppercase m-b-20">Income</h6>
	                                <h1 class="m-b-12 text-white counter">{{$order->sum('harga_sewa')}}</h1>
	                                <span class="text-white">Today</span>
	                            </div>
	                        </div>
	                    </div>
                    </div>
                    <!-- end row -->
                    
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-file-alt"></i> Data Sewa</h3>
                                </div>

                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table id="" class="table table-bordered table-hover display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="width:5px">#</th>
                                                    <th width="150px">ID User</th>
                                                    <th width="280px">Tanggal Sewa</th>
                                                    <th width="280px">Tanggal Kembali</th>
                                                    <th width="280px">Harga Sewa</th>
                                                    <th width="280px">Uang Bayar</th>
                                                    <th width="280px">Kembalian</th>
                                                    <th width="280px">Status</th>
                                                </tr>
                                            </thead>
                                            @php $no = 1; @endphp
                                        @foreach ($data as $k)
                                            <tbody>

                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $k->id_user }}</td>   
                                                    <td>{{ $k->tanggal_sewa }}</td>
                                                    <td>{{ $k->tanggal_kembali }}</td>                                                
                                                    <td>{{ $k->harga_sewa }}</td>                                         
                                                    <td>{{ $k->uang_bayar }}</td>
                                                    <td>{{ $k->kembalian }}</td>
                                                    <td>{{ $k->status }}</td>     
                                                </tr>
                                            </tbody>
                                        @endforeach 
                                        </table>

                                    <div class="d-flex">
                                        {{ $data->links() }}
                                    </div>
                                    <div class="container " style="width: 24rem;">

                                    <div class="form-group">
                                        <span class="pull-center"><a href="{{ route('home.cetak') }}" class="btn btn-danger btn-sm btn-block mb-3"></i> Print Pdf</a></span>
                                    </div>
                                    <!-- <a href="{{ route('dvd.home') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Add Order</a> -->
                                    </div>
                                    <!-- end table-responsive-->

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>

                    </div>
                    <!-- end row-->

                    
                </div>
                <!-- END container-fluid -->


                
            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->

@endsection 
