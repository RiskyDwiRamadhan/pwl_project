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
                        <div class="card-header">
                            <span class="pull-right"><a href="{{ route('dvd.home') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Add Order</a></span>
                            <h3><i class="far fa-file-alt"></i> Order</h3>
                        </div>

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="5px">#</th>
                                            <th width="280px">Nama DVD</th>
                                            <th width="280px">Harga DVD</th>
                                            <th width="100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($detailorder as $D)

                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $D->dvd->nama_dvd }}</td>
                                            <td>{{ $D->dvd->harga_dvd }}</td>
                                            <td>
                                            <form action="{{ route('order.destroy', $D->id_sorder) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button value="delete" type="submit" class="btn btn-danger btn-sm btn-block" onclick="return confirm('Anda yakin ingin meghapus data ini ?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                    <form method="post" action="{{ route('order.save') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        @method('GET')

                                    <tr>
                                        <th></th>
                                        <th width="110px">Total Harga</th>
                                        <th><input id="harga" name="harga" type="text" value="{{$detailorder->sum('harga')}}" readonly></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th width="110px">Uang Bayar</th>
                                        <th><input id="bayar" name="bayar" required type="text"></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th width="110px">Kembalian</th>
                                        <th><input id="kembalian" name="kembalian"  type="text" readonly></th>
                                        <th></th>
                                    </tr>
                                </table>
                            </div>

                            <div class="d-flex">
                                {{ $detailorder->links() }}
                            </div>

                            <div class="container mt-1 " style="width: 24rem;">

                            <div class="form-group">
                                    <label for="user">ID User</label>
                                    <input type="text" name="user" class="form-control" required id="user" aria-describedby="user">
                                </div>
                                <div class="form-group">
                                    <label for="pinjam">Tanggal Pinjam</label>
                                    <input type="text" name="pinjam" class="form-control" id="pinjam" aria-describedby="Tanggal Sewa" value="{{now()}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="kembali">Tanggal Kembali</label>
                                    <input type="DATE" name="kembali" class="form-control" required id="kembali" aria-describedby="Tanggal Kembali" value="{{NOW()}}">
                                </div>
                                <button value="save" type="submit" class="btn btn-success pull-right btn-sm btn-block mb-3">Submit</button>
                            </div>
                    </form>
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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#harga, #bayar").keyup(function() {
            var harga = $("#harga").val();
            var bayar = $("#bayar").val();

            var kembalian = parseInt(bayar) - parseInt(harga);
            $("#kembalian").val(kembalian);
        });
    });
</script>
<!-- END content-page -->

@endsection