{{-- @extends('layouts.index')

@section('content')
    
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Data DVD</h2>
        </div>
        
        <!-- Form Search -->
        <div class="float-left my-2">
            <form action="{{ route('dvd.index') }}" method="GET">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" name="search" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Cari</button>
                    </span>
                </div>
            </form>
        </div>
        <!-- End Form Search -->

        <div class="float-right my-2">
        <a class="btn btn-success" href="{{ route('dvd.create') }}"> Input DVD</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered" enctype="multipart/form-data">
    <tr>
        <th>Image</th>
        <th>Nama DVD</th>
        <th>Harga DVD</th>
        <th>Status DVD</th>
        <th width="280px">Action</th>
        </tr>
        @foreach ($dvd as $DVD)
            <tr>
                <td><img width="100px" src="{{$DVD->image_dvd}}"></td>
                <td>{{ $DVD->nama_dvd }}</td>
                <td>{{ $DVD->harga_dvd}}</td>
                <td>{{ $DVD->status_dvd }}</td>
                <td>
                    <form action="{{ route('dvd.destroy',$DVD->id_dvd) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('dvd.show',$DVD->id_dvd) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('dvd.edit',$DVD->id_dvd) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>                        
                    </form>
                </td>
            </tr>
        @endforeach
</table>            

        <div class="d-flex">
            {{ $dvd->links() }}
        </div> 
@endsection --}}

@extends('layouts.index')
@section('title')
Admin-DVD
@endsection
@section('content')
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">DVD</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">DVD</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card mb-3">

                        <div class="card-header">
                            <span class="pull-right"><a href="{{ route('dvd.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Add DVD</a></span>
                            <h3><i class="far fa-file-alt"></i> DVD</h3>
                        </div>
                        
                        <div class="mt-3" style="width:310px">
                            <form action="{{ route('dvd.index') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Cari DVD....">
                                    <button type="submit" class="btn btn-primary">
                                        Cari
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- end card-header -->

                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="280px">Image</th>
                                                <th width="280px">Nama DVD</th>
                                                <th width="280px">Harga DVD</th>
                                                <th width="280px">Status DVD</th>
                                                <th width="200px">Action</th>
                                            </tr>
                                        </thead>
                                    @foreach ($dvd as $DVD)
                                        <tbody>

                                            <tr>
                                                <td><img width="100px" src="{{ asset('storage/' . $DVD->image_dvd) }}"></td>
                                                <td>{{ $DVD->nama_dvd }}</td>
                                                <td>{{ $DVD->harga_dvd}}</td>
                                                <td>{{ $DVD->status_dvd }}</td>
                                                <td>
                                                    <form action="{{ route('dvd.destroy',$DVD->id_dvd) }}" method="POST">
                                
                                                        <a class="btn btn-info btn-sm btn-block" href="{{ route('dvd.show',$DVD->id_dvd) }}">Show</a>
                                                        <a class="btn btn-primary btn-sm btn-block" href="{{ route('dvd.edit',$DVD->id_dvd) }}">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm btn-block mt-2">Delete</button>                        
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach   
                                    </table>
                                </div>
                            </div> 
                            <!-- end card-body -->

                            <div class="d-flex">
                                {{ $dvd->links() }}
                            </div> 
                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->
@endsection 