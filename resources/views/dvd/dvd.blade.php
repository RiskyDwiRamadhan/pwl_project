{{-- @extends('layouts.index')

@section('title')
    DVD-Create
@endsection

@section('content')
    
<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
        <div class="card mb-3">
            <div class="card-header">
            </div>

            <div class="card-body">

                @foreach ($dvd as $DVD)
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/' . $DVD->image_dvd) }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">{{ $DVD->nama_dvd }}</h4>
                            <p class="card-text">{{ $DVD->harga_dvd }}</p>
                            <a href="#" class="btn btn-primary">Pinjam</a>
                        </div>
                    </div>
                @endforeach   

            </div>
        </div>
        <!-- end card-->
    </div>
    
    <div class="d-flex">
        {{ $dvd->links() }}
    </div> 
</div>

@endsection --}}

@extends('layouts.index')
@section('title')
Kasir-DVD
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
            <div class="mt-3 btn-sm" style="width:310px">
                <form action="{{ route('dvd.home') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Cari DVD....">
                        <button type="submit" class="btn btn-primary">
                            Cari
                        </button>
                    </div>
                </form>
            </div>
            <div class="row">

            @foreach ($dvd as $DVD)
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" >
                    <div class="card mt-3 ">
                        <div class="card-header">
                        </div>

                        <div class="card-body">

                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('storage/' . $DVD->image_dvd) }}" alt="Card image cap" width="100px" height="300px">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $DVD->nama_dvd }}</h4>
                                        <p class="card-text">{{ $DVD->harga_dvd }}</p>
                                        <a href="{{ route('dvd.pesan', $DVD->id_dvd) }}" class="btn btn-primary mt-3 btn-sm btn-block">Pinjam</a>
                                    </div>
                                </div> 

                        </div>
                    </div>
                    <!-- end card-->
                </div>
                
                            @endforeach  
                <div class="d-flex">
                    {{ $dvd->links() }}
                </div> 
            </div>
            <!-- end row -->

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->
@endsection 