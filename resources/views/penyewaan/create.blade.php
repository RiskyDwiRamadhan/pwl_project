@extends('layouts.app')

@section('template')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
@endsection
@section('data')    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript">
        $(function() {
        $('#datetimepicker').datetimepicker();
        });
    </script>    
@endsection
@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('sewa.store') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="id_sewa">ID Penyewaan</label>
                            <input type="text" name="id_sewa" class="form-control" id="id_sewa" aria-describedby="id_sewa" >
                        </div>
                        <div class="form-group">
                            <label for="id_user">ID User</label>
                            <input type="text" name="id_user" class="form-control" id="id_user" aria-describedby="id_user" >
                        </div>
                        <div class="form-group">
                            <label for="id_dvd">Nama DVD</label> 
                            <select type="id_dvd" name="id_dvd" class="form-control" id="id_dvd">
                                @foreach($dvd as $DVD)
                                    <option value="{{$DVD->id_dvd}}">{{$DVD->nama_dvd}}</option>
                                @endforeach
                            </select>
                        {{-- </div>
                        <div class="form-group">
                            <label for="tanggal_sewa">Tanggal Sewa</label>
                            <input type="text" name="tanggal_sewa" class="form-control" id="tanggal_sewa" aria-describedby="tanggal_sewa" >
                        </div> --}}
        <div class="form-group">
            <div class='input-group date' id='datetimepicker'>
            <input type='text' class="form-control" />
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
            </div>
        </div>
                        <div class="form-group">
                            <label for="tanggal_kembali">Tanggal Kembali</label>
                            <input type="text" name="tanggal_kembali" class="form-control" id="tanggal_kembali" aria-describedby="tanggal_kembali" >
                        </div>
                        <div class="form-group">
                            <label for="harga_sewa">Harga Sewa</label>
                            <input type="harga_sewa" name="harga_sewa" class="form-control" id="harga_sewa" aria-describedby="harga_sewa" >
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
