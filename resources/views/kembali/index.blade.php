{{-- @extends('layouts.index')
@section('title')
    Halaman Kembali
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Kembali</h2>
            </div>
            
            <div class="float-right my-2">
                {{-- <a class="btn btn-dark" href="{{ route('transaksi.save') }}">Order</a> 
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No Meja</th>
            <th>Harga Total</th>
            <th>Tanggal Order</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kembali as $ORDER)
        <tr>
            <td>{{ $ORDER->id_meja }}</td>
            <td>{{ $ORDER->harga_total }}</td>
            <td>{{ $ORDER->tgl_order}}</td>
            <td>{{ $ORDER->status }}</td>
            <td>
                <a class="btn btn-dark" href="{{ route('transaksi.bayar', $ORDER->id_order) }}">Order</a>     
            </td>
        </tr>
        @endforeach
    </table>    

    <div class="d-flex">
        {{ $kembali->links() }}
    </div>

@endsection  --}}

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
Kasir-Kembali
@endsection
@section('content')
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Kembali</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Kembali</li>
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
                                <h3><i class="far fa-file-alt"></i> Kembali</h3>
                            </div>

                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width:5px">#</th>
                                                <th width="280px">Tanggal Sewa</th>
                                                <th width="280px">Tanggal Kembali</th>
                                                {{-- <th width="280px">Jumlah Sewa</th> --}}
                                                <th width="280px">Harga Sewa</th>
                                                <th width="280px">Status</th>
                                                <th width="100px">Action</th>
                                            </tr>
                                        </thead>
                                        @php $no = 1; @endphp
                                    @foreach ($kembali as $k)
                                        <tbody>

                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $k->tanggal_sewa }}</td>
                                                <td>{{ $k->tanggal_kembali }}</td>
                                                {{-- <td>{{ $k->dorder->sum('id_dorder') }}</td> --}}
                                                <td>{{ $k->harga_sewa }}</td>
                                                <td>{{ $k->status }}</td>
                                                <td>
                                                    {{-- <a class="btn btn-info btn-sm btn-block" href="{{ route('dvd.show',$DVD->id_dvd) }}">Show</a> --}}
                                                    <a class="btn btn-info btn-sm btn-block" href="#">Show</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach  
                                    </table>
                                </div>

                                <div class="d-flex">
                                    {{ $kembali->links() }}
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
@endsection 