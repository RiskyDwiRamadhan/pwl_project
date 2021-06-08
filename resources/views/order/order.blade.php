{{-- @extends('layouts.app')
@section('title')
    Halaman Keranjang
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Detail Order</h2>
            </div>
            
            {{-- <div class="float-right my-2">
                <a class="btn btn-dark" href="{{ route('detailorder.save') }}">Order</a>                        
                <a class="btn btn-success" href="{{ route('home.menu') }}"> Input Detail Order</a>
            </div> 
        </div>
    </div>

    <form method="post" action="#" id="myForm" enctype="multipart/form-data">
        @csrf
        @method('GET')
        <div class="float-right my-2">
            <button type="submit" class="btn btn-primary">Submit</button>                   
            <a class="btn btn-success" href="{{ route('dvd.home') }}"> Tambah Menu</a>
        </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nama DVD</th>
            <th>Harga DVD</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($detailorder as $D)
        <tr>
            <td>{{ $D->dvd->nama_dvd }}</td>
            <td>{{ $D->dvd->harga_dvd }}</td>
            <td>
                {{-- <form action="{{ route('detailorder.destroy', $D->id_sorder) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('detailorder.edit', $D->id_sorder) }}">Edit</a>
                    @csrf
                    {{-- @method('DELETE')  
                    <button type="submit" class="btn btn-danger">Delete</button>
                            
                </form> 
            </td>
        </tr>
        @endforeach
        <tr>
            <th width="110px">Total Harga</th>
            <th>{{$detailorder->sum('harga')}}</th>
            <th></th>
        </tr>
    </table>    

    <div class="d-flex">
        {{ $detailorder->links() }}
    </div>

    <div class="container mt-1 " style="width: 24rem;"> 
        
        <div class="form-group">
            <label for="tanggal">Tanggal Pinjam</label>
            <input type="tanggal" name="tanggal" class="form-control" id="tanggal" aria-describedby="Tanggal Transaksi" value="{{NOW()}}">
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal Kembali</label>
            <input type="tanggal" name="tanggal" class="form-control" id="tanggal" aria-describedby="Tanggal Transaksi" value="{{NOW()}}">
        </div>
    </div>
</form>
@endsection  --}}

@extends('layouts.index')
@section('title')
Admin-Order
@endsection
@section('content')
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Order</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Order</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card mb-3">

                        {{-- <div class="card-header">
                            <span class="pull-right"><a href="{{ route('order.store') }}" class="btn btn-success btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Order</a></span>
                            <span class="pull-right"><a href="{{ route('dvd.home') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Add Order</a></span>
                            <h3><i class="far fa-file-alt"></i> Order</h3>
                        </div> --}}
                        <!-- end card-header -->

                        <form method="post" action="{{ route('order.save') }}" id="myForm" enctype="multipart/form-data">
                            @csrf
                            @method('GET')

                            <div class="card-header">
                                <button type="submit" class="btn btn-success pull-right btn-sm">Submit</button>  
                                <span class="pull-right"><a href="{{ route('dvd.home') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Add Order</a></span>
                                <h3><i class="far fa-file-alt"></i> Order</h3>
                            </div>

                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="280px">Nama DVD</th>
                                                <th width="280px">Harga DVD</th>
                                                <th width="100px">Action</th>
                                            </tr>
                                        </thead>
                                    @foreach ($detailorder as $D)
                                        <tbody>

                                            <tr>
                                                <td>{{ $D->dvd->nama_dvd }}</td>
                                                <td>{{ $D->dvd->harga_dvd }}</td>
                                                <td>
                                                    <form action="{{ route('order.destroy', $D->id_sorder) }}" method="post">
                                                    {{-- @csrf --}}
                                                    {{-- @method('DELETE') --}}
                                                        <button type="submit" class="btn btn-danger btn-sm btn-block" onclick="return confirm('Anda yakin ingin meghapus data ini ?')">Delete</button>
                                                                
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach   
                                    <tr>
                                        <th width="110px">Total Harga</th>
                                        <th>{{$detailorder->sum('harga')}}</th>
                                        <th ></th>
                                    </tr>
                                    </table>
                                </div>

                                <div class="d-flex">
                                    {{ $detailorder->links() }}
                                </div>
                            
                                <div class="container mt-1 " style="width: 24rem;"> 
                                    
                                    <div class="form-group">
                                        <label for="pinjam">Tanggal Pinjam</label>
                                        <input type="text" name="pinjam" class="form-control" id="pinjam" aria-describedby="Tanggal Sewa" value="{{now()}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kembali">Tanggal Kembali</label>
                                        <input type="DATE" name="kembali" class="form-control" id="kembali" aria-describedby="Tanggal Kembali" value="{{NOW()}}">
                                    </div>
                                </div>
                            </div> 
                            <!-- end card-body -->
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
</form>
@endsection 