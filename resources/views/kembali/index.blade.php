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

                            <div class="mt-3 btn-sm" style="width:310px">
                                <form action="{{ route('kembali.index') }}" method="GET">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control" placeholder="Cari DVD....">
                                        <button type="submit" class="btn btn-primary">
                                            Cari
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width:5px">#</th>
                                                <th width="150px">ID User</th>
                                                <th width="280px">Tanggal Sewa</th>
                                                <th width="280px">Tanggal Kembali</th>
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
                                                <td>{{ $k->id_user }}</td>   
                                                <td>{{ $k->tanggal_sewa }}</td>
                                                <td>{{ $k->tanggal_kembali }}</td>                                                
                                                <td>{{ $k->harga_sewa }}</td>
                                                <td>{{ $k->status }}</td>
                                                <td>
                                                    <a class="btn btn-success btn-sm btn-block" href="{{ route('kembali.kembali', $k->id_sewa) }}">Kembali</a>
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