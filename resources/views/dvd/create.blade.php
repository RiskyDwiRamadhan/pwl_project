@extends('layouts.app')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Data DVD
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
                    <form method="post" action="{{ route('dvd.store') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Foto: </label>
                            <input type="file" class="form-control" required="required" name="image">
                        </div>
                        <div class="form-group">
                            <label for="id_dvd">ID DVD</label>
                            <input type="text" name="id_dvd" class="form-control" id="id_dvd" aria-describedby="id_dvd" >
                        </div>
                        <div class="form-group">
                            <label for="nama_dvd">Nama DVD</label>
                            <input type="nama_dvd" name="nama_dvd" class="form-control" id="nama_dvd" aria-describedby="nama_dvd" >
                        </div>
                        <div class="form-group">
                            <label for="harga_dvd">Harga DVD</label>
                            <input type="harga_dvd" name="harga_dvd" class="form-control" id="harga_dvd" aria-describedby="harga_dvd" >
                        </div>
                        <div class="form-group">
                            <label for="status_dvd">Status DVD</label>
                            <input type="status_dvd" name="status_dvd" class="form-control" id="status_dvd" aria-describedby="status_dvd" >
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
